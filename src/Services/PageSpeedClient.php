<?php

declare(strict_types=1);

namespace Yu\PageSpeed\Services;

use Illuminate\Http\Client\ConnectionException;
use Illuminate\Http\Client\Pool;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Yu\PageSpeed\Data\Run;
use Yu\PageSpeed\Data\Snapshot;
use Yu\WebToolsCore\Exceptions\ToolException;

/**
 * Runs Google PageSpeed Insights for a page on mobile and on desktop at the same time.
 * Google downloads the page itself, so this server never connects to the checked site.
 */
class PageSpeedClient
{
    /** The tool's languages that Lighthouse names differently. */
    private const array LIGHTHOUSE_LOCALES = ['pt' => 'pt-PT'];

    /**
     * @throws ToolException quota, unreachable, http_error, timeout, generic
     */
    public function run(string $url, string $locale): Snapshot
    {
        $timeout = (int) config('page-speed.timeout');

        $responses = Http::pool(fn (Pool $pool): array => [
            $pool->as('mobile')->timeout($timeout)->acceptJson()->get($this->endpoint($url, 'mobile', $locale)),
            $pool->as('desktop')->timeout($timeout)->acceptJson()->get($this->endpoint($url, 'desktop', $locale)),
        ]);

        $limit = (int) config('page-speed.issues');

        return new Snapshot(
            url: $url,
            mobile: Run::fromResponse($this->body($responses['mobile']), $limit),
            desktop: Run::fromResponse($this->body($responses['desktop']), $limit),
        );
    }

    /**
     * The request address. PSI takes the category parameter once per category, which an array of query
     * data cannot express, and query data passed to the client would replace a query already in the URL.
     */
    private function endpoint(string $url, string $strategy, string $locale): string
    {
        $query = http_build_query(array_filter([
            'url' => $url,
            'strategy' => $strategy,
            'locale' => self::LIGHTHOUSE_LOCALES[$locale] ?? $locale,
            'key' => config('page-speed.api_key'),
        ]));

        foreach (Run::CATEGORIES as $category) {
            $query .= '&category='.$category;
        }

        return config('page-speed.endpoint').'?'.$query;
    }

    /**
     * @return array<string, mixed>
     */
    private function body(mixed $response): array
    {
        if ($response instanceof ConnectionException || !$response instanceof Response) {
            throw new ToolException('timeout');
        }

        $data = $response->json();

        if ($response->successful() && is_array($data) && isset($data['lighthouseResult'])) {
            return $data;
        }

        $message = (string) ($data['error']['message'] ?? '');

        throw match (true) {
            $response->status() === 429 => new ToolException('quota'),
            // Lighthouse could not load the page: wrong address, the site is down or blocks Google
            str_contains($message, 'FAILED_DOCUMENT_REQUEST'), str_contains($message, 'DNS_FAILURE') => new ToolException('unreachable'),
            str_contains($message, 'ERRORED_DOCUMENT_REQUEST') => new ToolException('http_error', ['status' => (int) (preg_match('/Status code: (\d+)/', $message, $m) ? $m[1] : 0)]),
            default => new ToolException('generic'),
        };
    }
}
