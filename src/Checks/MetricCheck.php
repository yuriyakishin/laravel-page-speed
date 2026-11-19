<?php

declare(strict_types=1);

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;
use Yu\WebToolsCore\Checklist\Check;

/**
 * A Core Web Vital on mobile, by Google's thresholds. Real visitors' data (Chrome UX Report, 75th percentile)
 * is used when Google has it, the lab run otherwise; the evidence line says which.
 */
abstract class MetricCheck implements SpeedCheck
{
    abstract protected function code(): string;

    abstract protected function max(): int;

    /**
     * @return array{0: float|null, 1: string} the value and its source line, e.g. "CrUX p75"
     */
    abstract protected function value(Snapshot $site): array;

    /**
     * @return array{0: float, 1: float} the limits of "good" and of "needs improvement"
     */
    abstract protected function limits(): array;

    abstract protected function format(float $value): string;

    protected function snippet(): ?string
    {
        return null;
    }

    public function run(Snapshot $site): Check
    {
        [$value, $source] = $this->value($site);

        if ($value === null) {
            return Check::skip($this->code(), $this->max(), 'none');
        }

        [$good, $poor] = $this->limits();
        $replace = ['value' => $this->format($value), 'good' => $this->format($good)];
        $evidence = [$source.': '.$this->format($value)];

        return match (true) {
            $value <= $good => Check::pass($this->code(), $this->max(), 'ok', $replace, $evidence),
            $value <= $poor => Check::warn($this->code(), (int) round($this->max() / 2), $this->max(), 'average', $replace, $evidence, $this->snippet()),
            default => Check::fail($this->code(), $this->max(), 'poor', $replace, $evidence, $this->snippet()),
        };
    }

    /**
     * The field value when there is one, else the lab value.
     *
     * @return array{0: float|null, 1: string}
     */
    protected function pick(Snapshot $site, string $field, ?string $lab): array
    {
        $run = $site->mobile;

        if ($run->field[$field] !== null) {
            return [$run->field[$field], 'CrUX p75 ('.$run->fieldScope.')'];
        }

        return [$lab === null ? null : $run->lab[$lab], 'Lighthouse'];
    }

    protected function seconds(float $ms): string
    {
        return number_format($ms / 1000, 1).' s';
    }
}
