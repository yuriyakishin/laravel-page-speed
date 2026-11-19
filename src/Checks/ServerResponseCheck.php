<?php

declare(strict_types=1);

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;

/**
 * V4: how long the server takes to answer. Real visitors' Time to First Byte: good up to 800 ms, poor after 1.8 s;
 * the lab server response time stands in when there is no field data.
 */
class ServerResponseCheck extends MetricCheck
{
    protected function code(): string
    {
        return 'V4';
    }

    protected function max(): int
    {
        return 5;
    }

    protected function value(Snapshot $site): array
    {
        return $this->pick($site, 'ttfb', 'ttfb');
    }

    protected function limits(): array
    {
        return [800, 1800];
    }

    protected function format(float $value): string
    {
        return $value >= 1000 ? $this->seconds($value) : (int) round($value).' ms';
    }

    protected function snippet(): string
    {
        return <<<'TEXT'
            # Laravel: cache the configuration, routes and views on the server
            php artisan optimize

            # nginx: compress text answers
            gzip on;
            gzip_types text/css application/javascript application/json image/svg+xml;
            TEXT;
    }
}
