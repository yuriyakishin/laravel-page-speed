<?php

declare(strict_types=1);

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;
use Yu\WebToolsCore\Checklist\Check;

/**
 * A Lighthouse category score: 90–100 passes, 50–89 earns part of the points, below 50 fails.
 */
abstract class ScoreCheck implements SpeedCheck
{
    abstract protected function code(): string;

    abstract protected function max(): int;

    abstract protected function score(Snapshot $site): ?int;

    public function run(Snapshot $site): Check
    {
        $score = $this->score($site);

        if ($score === null) {
            return Check::skip($this->code(), $this->max(), 'none');
        }

        $replace = ['score' => $score];

        return match (true) {
            $score >= 90 => Check::pass($this->code(), $this->max(), 'ok', $replace),
            $score >= 50 => Check::warn($this->code(), (int) round($this->max() * $score / 100), $this->max(), 'average', $replace),
            default => Check::fail($this->code(), $this->max(), 'poor', $replace),
        };
    }
}
