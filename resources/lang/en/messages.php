<?php

return [
    'form' => [
        'label' => 'Page address',
        'button' => 'Check',
        'hint' => 'Free · no sign-up · up to :count checks per hour · takes up to a minute',
    ],
    'loading' => [
        'mobile' => 'Google is loading the page on a phone',
        'desktop' => 'Google is loading the page on a computer',
        'checks' => 'Reading the Core Web Vitals and the issues',
    ],
    'errors' => [
        'quota' => 'The speed service has used up its Google limit for today. Please try again tomorrow',
        'unreachable' => 'Google could not open the page. Check the address and that the site is up',
        'timeout' => 'Google did not finish the check in time. Please try again',
    ],
    'verdicts' => [
        'ready' => 'The page is fast',
        'almost' => 'The page is almost fast',
        'partly' => 'The page is slow in places',
        'not_ready' => 'The page is slow',
    ],
    'scores' => [
        'title' => 'Lighthouse scores',
        'mobile' => 'Phone',
        'desktop' => 'Computer',
        'field_page' => 'The Core Web Vitals below are from real Chrome visitors of this page over the last 28 days.',
        'field_origin' => 'This page has too few visits of its own: the Core Web Vitals below are from real visitors of the whole site over 28 days.',
        'lab_only' => 'Google has no data of real visitors for this site yet: the Core Web Vitals below come from the lab run.',
    ],
    'categories' => [
        'performance' => 'Performance',
        'accessibility' => 'Accessibility',
        'best-practices' => 'Best practices',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'What slows the page most',
        'note' => 'From the phone run of Google Lighthouse, the biggest saving first.',
        'saves_time' => '−:value s',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => 'Performance', 'text' => 'The Lighthouse performance scores on a phone and on a computer'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'The speed measures Google uses in search, on a phone'],
        'Q' => ['title' => 'SEO, accessibility, best practices', 'text' => 'The other Lighthouse scores of the phone run'],
    ],
    'checks' => [
        'P1' => [
            'title' => 'Is the page fast on a phone?',
            'text' => 'Lighthouse performance on mobile, 90+',
            'fix' => 'Start with the list «What slows the page most» under the report: it is sorted by the time each fix saves. Most often it is heavy pictures, too much JavaScript and fonts that block the text.',
            'notes' => [
                'ok' => 'Performance on a phone: :score out of 100.',
                'average' => 'Performance on a phone: :score out of 100. Google counts the phone speed for ranking.',
                'poor' => 'Performance on a phone: :score out of 100. Visitors on phones wait and leave.',
                'none' => 'Lighthouse did not give a score.',
            ],
        ],
        'P2' => [
            'title' => 'Is the page fast on a computer?',
            'text' => 'Lighthouse performance on desktop, 90+',
            'fix' => 'The fixes are the same as for the phone: on a computer they matter less because of the faster processor and network.',
            'notes' => [
                'ok' => 'Performance on a computer: :score out of 100.',
                'average' => 'Performance on a computer: :score out of 100.',
                'poor' => 'Performance on a computer: :score out of 100: the page is slow even on a fast computer.',
                'none' => 'Lighthouse did not give a score.',
            ],
        ],
        'V1' => [
            'title' => 'How fast does the main content appear?',
            'text' => 'Largest Contentful Paint up to 2.5 s',
            'fix' => 'Speed up the biggest picture or text block of the first screen: compress the picture and serve it as WebP or AVIF, load it with priority and never lazily, and make the server answer faster.',
            'notes' => [
                'ok' => 'The main content appears in :value.',
                'average' => 'The main content appears in :value; good is up to :good.',
                'poor' => 'The main content appears only in :value; good is up to :good. Many visitors leave before that.',
                'none' => 'There is no LCP measurement.',
            ],
        ],
        'V2' => [
            'title' => 'Does the page jump while it loads?',
            'text' => 'Cumulative Layout Shift up to 0.1',
            'fix' => 'Give every picture, video and ad block its width and height, show text at once in a fallback font, and do not insert banners above the content after the page has loaded.',
            'notes' => [
                'ok' => 'The page is stable: CLS :value.',
                'average' => 'The page jumps a little: CLS :value; good is up to :good.',
                'poor' => 'The page jumps a lot: CLS :value; good is up to :good. People tap the wrong buttons.',
                'none' => 'There is no CLS measurement.',
            ],
        ],
        'V3' => [
            'title' => 'Does the page react to taps quickly?',
            'text' => 'Interaction to Next Paint up to 200 ms',
            'fix' => 'Load less JavaScript and later: split the scripts, remove unused libraries and widgets, defer analytics and chats until after the page has loaded.',
            'notes' => [
                'ok' => 'The page reacts in :value.',
                'average' => 'The page reacts in :value; good is up to :good.',
                'poor' => 'The page reacts only in :value; good is up to :good. Buttons feel broken.',
                'none' => 'There is no measurement of the reaction time.',
            ],
        ],
        'V4' => [
            'title' => 'Does the server answer quickly?',
            'text' => 'Server response up to 0.8 s',
            'fix' => 'Speed up the server: turn on page and database caching, compression, a newer PHP, and move to better hosting or a CDN if the server is far from the visitors.',
            'notes' => [
                'ok' => 'The server answers in :value.',
                'average' => 'The server answers in :value; good is up to :good.',
                'poor' => 'The server answers only in :value; good is up to :good. Everything else waits for it.',
                'none' => 'There is no measurement of the server response.',
            ],
        ],
        'Q1' => [
            'title' => 'Can search engines read the page?',
            'text' => 'Lighthouse SEO, 90+',
            'fix' => 'Open the page in Chrome DevTools → Lighthouse → SEO: it lists every point, most often a missing meta description, links without text or tap targets that are too small.',
            'notes' => [
                'ok' => 'SEO: :score out of 100.',
                'average' => 'SEO: :score out of 100.',
                'poor' => 'SEO: :score out of 100: search engines may misread the page.',
                'none' => 'Lighthouse did not give a score.',
            ],
        ],
        'Q2' => [
            'title' => 'Can everyone use the page?',
            'text' => 'Lighthouse accessibility, 90+',
            'fix' => 'Most often: text with too little contrast, pictures without alt text, buttons and fields without names. Chrome DevTools → Lighthouse → Accessibility lists every case.',
            'notes' => [
                'ok' => 'Accessibility: :score out of 100.',
                'average' => 'Accessibility: :score out of 100.',
                'poor' => 'Accessibility: :score out of 100: people with weak sight or screen readers will struggle.',
                'none' => 'Lighthouse did not give a score.',
            ],
        ],
        'Q3' => [
            'title' => 'Is the page built by modern rules?',
            'text' => 'Lighthouse best practices, 90+',
            'fix' => 'Most often: errors in the browser console, pictures in a lower resolution than shown, outdated libraries with known holes. Chrome DevTools → Lighthouse → Best practices lists every case.',
            'notes' => [
                'ok' => 'Best practices: :score out of 100.',
                'average' => 'Best practices: :score out of 100.',
                'poor' => 'Best practices: :score out of 100.',
                'none' => 'Lighthouse did not give a score.',
            ],
        ],
    ],
];
