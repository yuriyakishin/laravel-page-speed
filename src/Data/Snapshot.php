<?php

namespace Yu\PageSpeed\Data;

/**
 * The page and its two Lighthouse runs.
 */
final readonly class Snapshot
{
    public function __construct(
        public string $url,
        public Run $mobile,
        public Run $desktop,
    ) {}
}
