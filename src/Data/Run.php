<?php

declare(strict_types=1);

namespace Yu\PageSpeed\Data;

/**
 * One Lighthouse run of PageSpeed Insights (mobile or desktop): category scores, lab metrics,
 * field metrics of real Chrome users when Google has them, and the performance issues with savings.
 */
final readonly class Run
{
    /** Lighthouse categories requested, in the order they are shown. */
    public const array CATEGORIES = ['performance', 'accessibility', 'best-practices', 'seo'];

    /**
     * @param  array<string, int|null>  $scores  0–100 by category
     * @param  array{lcp: float|null, cls: float|null, tbt: float|null, fcp: float|null, ttfb: float|null}  $lab  ms, CLS unitless
     * @param  array{lcp: float|null, cls: float|null, inp: float|null, ttfb: float|null}  $field  75th percentile; empty values when Google has no data
     * @param  string|null  $fieldScope  "page" or "origin" (the whole site) when the field data comes from one of them
     * @param  list<array{id: string, title: string, value: string|null, savingsMs: int, savingsBytes: int, description: string}>  $issues
     */
    public function __construct(
        public array $scores,
        public array $lab,
        public array $field = ['lcp' => null, 'cls' => null, 'inp' => null, 'ttfb' => null],
        public ?string $fieldScope = null,
        public array $issues = [],
    ) {}

    /**
     * @param  array<string, mixed>  $response  the PageSpeed Insights API response
     */
    public static function fromResponse(array $response, int $issueLimit = 8): self
    {
        $lighthouse = $response['lighthouseResult'] ?? [];
        $audits = $lighthouse['audits'] ?? [];
        $number = fn (string $id): ?float => isset($audits[$id]['numericValue']) ? (float) $audits[$id]['numericValue'] : null;

        $scores = [];
        foreach (self::CATEGORIES as $category) {
            $score = $lighthouse['categories'][$category]['score'] ?? null;
            $scores[$category] = $score === null ? null : (int) round($score * 100);
        }

        [$field, $scope] = self::field($response);

        return new self(
            scores: $scores,
            lab: [
                'lcp' => $number('largest-contentful-paint'),
                'cls' => $number('cumulative-layout-shift'),
                'tbt' => $number('total-blocking-time'),
                'fcp' => $number('first-contentful-paint'),
                'ttfb' => $number('server-response-time'),
            ],
            field: $field,
            fieldScope: $scope,
            issues: self::issues($lighthouse, $issueLimit),
        );
    }

    /**
     * Field data of the page, or of the whole site when the page alone has too few visits.
     *
     * @param  array<string, mixed>  $response
     * @return array{0: array{lcp: float|null, cls: float|null, inp: float|null, ttfb: float|null}, 1: string|null}
     */
    private static function field(array $response): array
    {
        foreach (['loadingExperience' => 'page', 'originLoadingExperience' => 'origin'] as $key => $scope) {
            $metrics = $response[$key]['metrics'] ?? [];

            // Without its own data the page block repeats the origin with origin_fallback set
            if ($metrics === [] || ($scope === 'page' && !empty($response[$key]['origin_fallback']))) {
                continue;
            }

            $percentile = fn (string $name): ?float => isset($metrics[$name]['percentile']) ? (float) $metrics[$name]['percentile'] : null;
            $cls = $percentile('CUMULATIVE_LAYOUT_SHIFT_SCORE');

            return [[
                'lcp' => $percentile('LARGEST_CONTENTFUL_PAINT_MS'),
                // CrUX gives CLS multiplied by 100
                'cls' => $cls === null ? null : $cls / 100,
                'inp' => $percentile('INTERACTION_TO_NEXT_PAINT'),
                'ttfb' => $percentile('EXPERIMENTAL_TIME_TO_FIRST_BYTE'),
            ], $scope];
        }

        return [['lcp' => null, 'cls' => null, 'inp' => null, 'ttfb' => null], null];
    }

    /**
     * Performance audits that failed and would save time or bytes, biggest saving first.
     * Audit ids change between Lighthouse versions, so they are picked by their result, not by name;
     * the titles come from Lighthouse in the requested language.
     *
     * @param  array<string, mixed>  $lighthouse
     * @return list<array{id: string, title: string, value: string|null, savingsMs: int, savingsBytes: int, description: string}>
     */
    private static function issues(array $lighthouse, int $limit): array
    {
        $issues = [];

        foreach ($lighthouse['categories']['performance']['auditRefs'] ?? [] as $ref) {
            $audit = $lighthouse['audits'][$ref['id']] ?? null;

            if ($audit === null || ($ref['group'] ?? null) === 'metrics' || !isset($audit['score']) || $audit['score'] >= 0.9) {
                continue;
            }

            $details = $audit['details'] ?? [];
            $savingsMs = (int) round($details['overallSavingsMs'] ?? max([0, ...array_values(array_filter($audit['metricSavings'] ?? [], 'is_numeric'))]));
            $savingsBytes = (int) round($details['overallSavingsBytes'] ?? 0);

            if ($savingsMs <= 0 && $savingsBytes <= 0) {
                continue;
            }

            $issues[] = [
                'id' => (string) $ref['id'],
                'title' => (string) ($audit['title'] ?? $ref['id']),
                'value' => isset($audit['displayValue']) ? (string) $audit['displayValue'] : null,
                'savingsMs' => $savingsMs,
                'savingsBytes' => $savingsBytes,
                'description' => self::plain((string) ($audit['description'] ?? '')),
            ];
        }

        usort($issues, fn (array $a, array $b): int => [$b['savingsMs'], $b['savingsBytes']] <=> [$a['savingsMs'], $a['savingsBytes']]);

        return array_slice($issues, 0, $limit);
    }

    /**
     * Lighthouse descriptions are Markdown: keep the text, drop the links and the code marks.
     */
    private static function plain(string $markdown): string
    {
        $text = preg_replace('/\[([^\]]+)\]\([^)]+\)/', '', $markdown);

        return trim(preg_replace('/\s+/', ' ', str_replace('`', '', $text)), " .\t\n").'.';
    }

    /**
     * @return array<string, mixed>
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
