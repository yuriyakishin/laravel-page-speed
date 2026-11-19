<?php

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;

/**
 * V1: Largest Contentful Paint, when the main picture or text block appears. Good up to 2.5 s, poor after 4 s.
 */
class LcpCheck extends MetricCheck
{
    protected function code(): string
    {
        return 'V1';
    }

    protected function max(): int
    {
        return 15;
    }

    protected function value(Snapshot $site): array
    {
        return $this->pick($site, 'lcp', 'lcp');
    }

    protected function limits(): array
    {
        return [2500, 4000];
    }

    protected function format(float $value): string
    {
        return $this->seconds($value);
    }

    protected function snippet(): string
    {
        return <<<'HTML'
            <!-- The main picture of the first screen: load it first, never lazily -->
            <link rel="preload" as="image" href="/images/hero.webp" fetchpriority="high">
            <img src="/images/hero.webp" width="1200" height="600" fetchpriority="high" alt="…">
            HTML;
    }
}
