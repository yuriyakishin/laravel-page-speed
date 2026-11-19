<?php

declare(strict_types=1);

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;

/**
 * Q3: The Lighthouse best practices score: HTTPS, console errors, outdated APIs.
 */
class BestPracticesScoreCheck extends ScoreCheck
{
    protected function code(): string
    {
        return 'Q3';
    }

    protected function max(): int
    {
        return 10;
    }

    protected function score(Snapshot $site): ?int
    {
        return $site->mobile->scores['best-practices'];
    }
}
