<?php

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;

/**
 * P1: The mobile performance score, the one Google uses for ranking.
 */
class MobileScoreCheck extends ScoreCheck
{
    protected function code(): string
    {
        return 'P1';
    }

    protected function max(): int
    {
        return 20;
    }

    protected function score(Snapshot $site): ?int
    {
        return $site->mobile->scores['performance'];
    }
}
