<?php

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;

/**
 * Q2: The Lighthouse accessibility score: whether people with screen readers or weak sight can use the page.
 */
class AccessibilityScoreCheck extends ScoreCheck
{
    protected function code(): string
    {
        return 'Q2';
    }

    protected function max(): int
    {
        return 10;
    }

    protected function score(Snapshot $site): ?int
    {
        return $site->mobile->scores['accessibility'];
    }
}
