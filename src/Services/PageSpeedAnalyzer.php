<?php

namespace Yu\PageSpeed\Services;

use Yu\PageSpeed\Checks;
use Yu\PageSpeed\Data\Snapshot;
use Yu\WebToolsCore\Checklist\ChecklistReport;
use Yu\WebToolsCore\Exceptions\ToolException;
use Yu\WebToolsCore\Http\UrlGuard;

/**
 * Runs PageSpeed Insights for a page and turns the result into a checklist report.
 */
class PageSpeedAnalyzer
{
    /**
     * Checks by group, in the order of the report: P — performance scores, V — Core Web Vitals on mobile,
     * Q — the other Lighthouse categories. The letter codes are internal keys of the translations.
     */
    public const array GROUPS = [
        'P' => [Checks\MobileScoreCheck::class, Checks\DesktopScoreCheck::class],
        'V' => [Checks\LcpCheck::class, Checks\ClsCheck::class, Checks\ResponsivenessCheck::class, Checks\ServerResponseCheck::class],
        'Q' => [Checks\SeoScoreCheck::class, Checks\AccessibilityScoreCheck::class, Checks\BestPracticesScoreCheck::class],
    ];

    public function __construct(private PageSpeedClient $client, private UrlGuard $guard) {}

    /**
     * The checklist report with both runs under the key "speed".
     *
     * @return array<string, mixed>
     *
     * @throws ToolException
     */
    public function analyze(string $url, string $locale): array
    {
        // Google downloads the page, but a typo or a private address is better caught here, with a clear message
        $this->guard->check($url);

        $site = $this->client->run($url, $locale);

        return [
            ...$this->report($site, $locale)->toArray(),
            'speed' => ['mobile' => $site->mobile->toArray(), 'desktop' => $site->desktop->toArray()],
        ];
    }

    public function report(Snapshot $site, string $locale): ChecklistReport
    {
        $groups = [];
        foreach (self::GROUPS as $group => $checks) {
            $groups[$group] = array_map(fn (string $check) => app($check)->run($site), $checks);
        }

        return new ChecklistReport(
            url: $site->url,
            locale: $locale,
            checkedAt: now()->toIso8601String(),
            ruleset: (string) config('page-speed.ruleset'),
            groups: $groups,
        );
    }
}
