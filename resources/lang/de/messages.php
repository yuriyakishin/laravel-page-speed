<?php

return [
    'form' => [
        'label' => 'Adresse der Seite',
        'button' => 'Prüfen',
        'hint' => 'Kostenlos · ohne Anmeldung · bis zu :count Prüfungen pro Stunde · dauert bis zu einer Minute',
    ],
    'loading' => [
        'mobile' => 'Google lädt die Seite auf einem Smartphone',
        'desktop' => 'Google lädt die Seite auf einem Computer',
        'checks' => 'Lese die Core Web Vitals und die Probleme',
    ],
    'errors' => [
        'quota' => 'Der Geschwindigkeitsdienst hat sein Google-Limit für heute verbraucht. Bitte versuchen Sie es morgen wieder',
        'unreachable' => 'Google konnte die Seite nicht öffnen. Prüfen Sie die Adresse und ob die Website erreichbar ist',
        'timeout' => 'Google hat die Prüfung nicht rechtzeitig beendet. Bitte versuchen Sie es noch einmal',
    ],
    'verdicts' => [
        'ready' => 'Die Seite ist schnell',
        'almost' => 'Die Seite ist fast schnell',
        'partly' => 'Die Seite ist stellenweise langsam',
        'not_ready' => 'Die Seite ist langsam',
    ],
    'scores' => [
        'title' => 'Lighthouse-Werte',
        'mobile' => 'Smartphone',
        'desktop' => 'Computer',
        'field_page' => 'Die Core Web Vitals unten stammen von echten Chrome-Besuchern dieser Seite in den letzten 28 Tagen.',
        'field_origin' => 'Diese Seite hat zu wenige eigene Besuche: Die Core Web Vitals unten stammen von echten Besuchern der ganzen Website in 28 Tagen.',
        'lab_only' => 'Google hat noch keine Daten echter Besucher dieser Website: Die Core Web Vitals unten stammen aus dem Labor-Lauf.',
    ],
    'categories' => [
        'performance' => 'Leistung',
        'accessibility' => 'Barrierefreiheit',
        'best-practices' => 'Best Practices',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'Was die Seite am meisten bremst',
        'note' => 'Aus dem Smartphone-Lauf von Google Lighthouse, die größte Ersparnis zuerst.',
        'saves_time' => '−:value s',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => 'Leistung', 'text' => 'Die Lighthouse-Leistungswerte auf Smartphone und Computer'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'Die Geschwindigkeitswerte, die Google in der Suche nutzt, auf dem Smartphone'],
        'Q' => ['title' => 'SEO, Barrierefreiheit, Best Practices', 'text' => 'Die übrigen Lighthouse-Werte des Smartphone-Laufs'],
    ],
    'checks' => [
        'P1' => [
            'title' => 'Ist die Seite auf dem Smartphone schnell?',
            'text' => 'Lighthouse-Leistung mobil, 90+',
            'fix' => 'Beginnen Sie mit der Liste „Was die Seite am meisten bremst“ unter dem Bericht: Sie ist nach der Zeit sortiert, die jede Korrektur spart. Meist sind es schwere Bilder, zu viel JavaScript und Schriften, die den Text aufhalten.',
            'notes' => [
                'ok' => 'Leistung auf dem Smartphone: :score von 100.',
                'average' => 'Leistung auf dem Smartphone: :score von 100. Google wertet die Smartphone-Geschwindigkeit für das Ranking.',
                'poor' => 'Leistung auf dem Smartphone: :score von 100. Besucher mit Smartphones warten und gehen.',
                'none' => 'Lighthouse hat keinen Wert geliefert.',
            ],
        ],
        'P2' => [
            'title' => 'Ist die Seite auf dem Computer schnell?',
            'text' => 'Lighthouse-Leistung am Desktop, 90+',
            'fix' => 'Die Korrekturen sind dieselben wie für das Smartphone: Am Computer fallen sie wegen schnellerer CPU und Netz weniger ins Gewicht.',
            'notes' => [
                'ok' => 'Leistung am Computer: :score von 100.',
                'average' => 'Leistung am Computer: :score von 100.',
                'poor' => 'Leistung am Computer: :score von 100: Die Seite ist selbst auf einem schnellen Computer langsam.',
                'none' => 'Lighthouse hat keinen Wert geliefert.',
            ],
        ],
        'V1' => [
            'title' => 'Wie schnell erscheint der Hauptinhalt?',
            'text' => 'Largest Contentful Paint bis 2,5 s',
            'fix' => 'Beschleunigen Sie das größte Bild oder den größten Textblock des ersten Bildschirms: Bild komprimieren und als WebP oder AVIF ausliefern, mit Priorität und nie verzögert laden, und den Server schneller antworten lassen.',
            'notes' => [
                'ok' => 'Der Hauptinhalt erscheint nach :value.',
                'average' => 'Der Hauptinhalt erscheint nach :value; gut ist bis :good.',
                'poor' => 'Der Hauptinhalt erscheint erst nach :value; gut ist bis :good. Viele Besucher gehen vorher.',
                'none' => 'Es gibt keine LCP-Messung.',
            ],
        ],
        'V2' => [
            'title' => 'Springt die Seite beim Laden?',
            'text' => 'Cumulative Layout Shift bis 0,1',
            'fix' => 'Geben Sie jedem Bild, Video und Werbeblock Breite und Höhe, zeigen Sie Text sofort in einer Ersatzschrift und fügen Sie nach dem Laden keine Banner über dem Inhalt ein.',
            'notes' => [
                'ok' => 'Die Seite ist stabil: CLS :value.',
                'average' => 'Die Seite springt etwas: CLS :value; gut ist bis :good.',
                'poor' => 'Die Seite springt stark: CLS :value; gut ist bis :good. Besucher tippen auf die falschen Buttons.',
                'none' => 'Es gibt keine CLS-Messung.',
            ],
        ],
        'V3' => [
            'title' => 'Reagiert die Seite schnell auf Tippen?',
            'text' => 'Interaction to Next Paint bis 200 ms',
            'fix' => 'Laden Sie weniger JavaScript und später: Skripte aufteilen, ungenutzte Bibliotheken und Widgets entfernen, Analytics und Chats bis nach dem Laden der Seite verschieben.',
            'notes' => [
                'ok' => 'Die Seite reagiert in :value.',
                'average' => 'Die Seite reagiert in :value; gut ist bis :good.',
                'poor' => 'Die Seite reagiert erst in :value; gut ist bis :good. Buttons wirken kaputt.',
                'none' => 'Es gibt keine Messung der Reaktionszeit.',
            ],
        ],
        'V4' => [
            'title' => 'Antwortet der Server schnell?',
            'text' => 'Serverantwort bis 0,8 s',
            'fix' => 'Beschleunigen Sie den Server: Seiten- und Datenbank-Cache, Kompression, ein neueres PHP einschalten und auf besseres Hosting oder ein CDN wechseln, wenn der Server weit von den Besuchern entfernt ist.',
            'notes' => [
                'ok' => 'Der Server antwortet in :value.',
                'average' => 'Der Server antwortet in :value; gut ist bis :good.',
                'poor' => 'Der Server antwortet erst in :value; gut ist bis :good. Alles andere wartet auf ihn.',
                'none' => 'Es gibt keine Messung der Serverantwort.',
            ],
        ],
        'Q1' => [
            'title' => 'Können Suchmaschinen die Seite lesen?',
            'text' => 'Lighthouse-SEO, 90+',
            'fix' => 'Öffnen Sie die Seite in Chrome DevTools → Lighthouse → SEO: Dort steht jeder Punkt, meist eine fehlende Meta-Description, Links ohne Text oder zu kleine Tippflächen.',
            'notes' => [
                'ok' => 'SEO: :score von 100.',
                'average' => 'SEO: :score von 100.',
                'poor' => 'SEO: :score von 100: Suchmaschinen könnten die Seite falsch lesen.',
                'none' => 'Lighthouse hat keinen Wert geliefert.',
            ],
        ],
        'Q2' => [
            'title' => 'Können alle die Seite nutzen?',
            'text' => 'Lighthouse-Barrierefreiheit, 90+',
            'fix' => 'Meist: Text mit zu wenig Kontrast, Bilder ohne Alt-Text, Buttons und Felder ohne Namen. Chrome DevTools → Lighthouse → Accessibility listet jeden Fall auf.',
            'notes' => [
                'ok' => 'Barrierefreiheit: :score von 100.',
                'average' => 'Barrierefreiheit: :score von 100.',
                'poor' => 'Barrierefreiheit: :score von 100: Menschen mit schwacher Sehkraft oder Screenreadern haben es schwer.',
                'none' => 'Lighthouse hat keinen Wert geliefert.',
            ],
        ],
        'Q3' => [
            'title' => 'Ist die Seite nach modernen Regeln gebaut?',
            'text' => 'Lighthouse-Best-Practices, 90+',
            'fix' => 'Meist: Fehler in der Browser-Konsole, Bilder in geringerer Auflösung als angezeigt, veraltete Bibliotheken mit bekannten Lücken. Chrome DevTools → Lighthouse → Best practices listet jeden Fall auf.',
            'notes' => [
                'ok' => 'Best Practices: :score von 100.',
                'average' => 'Best Practices: :score von 100.',
                'poor' => 'Best Practices: :score von 100.',
                'none' => 'Lighthouse hat keinen Wert geliefert.',
            ],
        ],
    ],
];
