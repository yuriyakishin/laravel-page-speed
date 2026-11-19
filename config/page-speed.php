<?php

return [
    'enabled' => env('PAGE_SPEED_ENABLED', true),

    /* Google PageSpeed Insights API key (Google Cloud → APIs & Services → Credentials). Without it Google allows no requests. */
    'api_key' => env('PAGESPEED_API_KEY'),

    'endpoint' => 'https://www.googleapis.com/pagespeedonline/v5/runPagespeed',

    /* One Lighthouse run takes 15–40 s; mobile and desktop run at the same time. */
    'timeout' => 75,

    /* Version of the scoring rules shown under the score; change it when the checks or points change. */
    'ruleset' => '2026-11-14',

    /* Lighthouse issues shown under the report, the ones that save the most time first. */
    'issues' => 8,

    'rate_limit' => [
        'per_hour' => (int) env('PAGE_SPEED_PER_HOUR', 10),
    ],

    /* Lighthouse results vary from run to run; a repeated check within 10 minutes shows the same report. */
    'cache' => [
        'ttl' => 600,
    ],
];
