<?php

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;

/**
 * V3: how fast the page reacts to a tap. Real visitors: Interaction to Next Paint, good up to 200 ms, poor after 500 ms.
 * Without field data the lab Total Blocking Time stands in for it: good up to 200 ms, poor after 600 ms.
 */
class ResponsivenessCheck extends MetricCheck
{
    private bool $lab = false;

    protected function code(): string
    {
        return 'V3';
    }

    protected function max(): int
    {
        return 10;
    }

    protected function value(Snapshot $site): array
    {
        [$value, $source] = $this->pick($site, 'inp', null);
        $this->lab = $value === null;

        return $this->lab ? [$site->mobile->lab['tbt'], 'Lighthouse TBT'] : [$value, $source];
    }

    protected function limits(): array
    {
        return $this->lab ? [200, 600] : [200, 500];
    }

    protected function format(float $value): string
    {
        return (int) round($value).' ms';
    }
}
