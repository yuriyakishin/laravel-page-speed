<?php

namespace Yu\PageSpeed\Checks;

use Yu\PageSpeed\Data\Snapshot;

/**
 * V2: Cumulative Layout Shift, how much the page jumps while it loads. Good up to 0.1, poor after 0.25.
 */
class ClsCheck extends MetricCheck
{
    protected function code(): string
    {
        return 'V2';
    }

    protected function max(): int
    {
        return 10;
    }

    protected function value(Snapshot $site): array
    {
        return $this->pick($site, 'cls', 'cls');
    }

    protected function limits(): array
    {
        return [0.1, 0.25];
    }

    protected function format(float $value): string
    {
        return number_format($value, 2);
    }

    protected function snippet(): string
    {
        return <<<'HTML'
            <!-- Give every picture and video its size, so the browser keeps the space before it loads -->
            <img src="/photo.webp" width="800" height="600" alt="…">

            /* Fonts: show the text at once in a fallback font */
            @font-face { font-family: "Inter"; src: url(/fonts/inter.woff2) format("woff2"); font-display: swap; }
            HTML;
    }
}
