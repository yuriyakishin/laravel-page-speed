<?php

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;

/**
 * P2: The desktop performance score.
 */
class DesktopScoreCheck extends ScoreCheck
{
    protected function code(): string
    {
        return 'P2';
    }

    protected function max(): int
    {
        return 10;
    }

    protected function score(Snapshot $site): ?int
    {
        return $site->desktop->scores['performance'];
    }
}
