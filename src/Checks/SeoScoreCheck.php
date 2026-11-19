<?php

declare(strict_types=1);

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;

/**
 * Q1: The Lighthouse SEO score: what search engines need to read the page.
 */
class SeoScoreCheck extends ScoreCheck
{
    protected function code(): string
    {
        return 'Q1';
    }

    protected function max(): int
    {
        return 10;
    }

    protected function score(Snapshot $site): ?int
    {
        return $site->mobile->scores['seo'];
    }
}
