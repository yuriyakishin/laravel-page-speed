<?php

return [
    'form' => [
        'label' => 'Adres van de pagina',
        'button' => 'Controleren',
        'hint' => 'Gratis · zonder registratie · tot :count controles per uur · duurt tot een minuut',
    ],
    'loading' => [
        'mobile' => 'Google laadt de pagina op een telefoon',
        'desktop' => 'Google laadt de pagina op een computer',
        'checks' => 'De Core Web Vitals en de problemen lezen',
    ],
    'errors' => [
        'quota' => 'De snelheidsdienst heeft zijn Google-limiet voor vandaag bereikt. Probeer het morgen opnieuw',
        'unreachable' => 'Google kon de pagina niet openen. Controleer het adres en of de website werkt',
        'timeout' => 'Google heeft de controle niet op tijd afgerond. Probeer het opnieuw',
    ],
    'verdicts' => [
        'ready' => 'De pagina is snel',
        'almost' => 'De pagina is bijna snel',
        'partly' => 'De pagina is hier en daar traag',
        'not_ready' => 'De pagina is traag',
    ],
    'scores' => [
        'title' => 'Lighthouse-scores',
        'mobile' => 'Telefoon',
        'desktop' => 'Computer',
        'field_page' => 'De Core Web Vitals hieronder komen van echte Chrome-bezoekers van deze pagina in de laatste 28 dagen.',
        'field_origin' => 'Deze pagina heeft te weinig eigen bezoeken: de Core Web Vitals hieronder komen van echte bezoekers van de hele website in 28 dagen.',
        'lab_only' => 'Google heeft nog geen gegevens van echte bezoekers van deze website: de Core Web Vitals hieronder komen uit de labtest.',
    ],
    'categories' => [
        'performance' => 'Prestaties',
        'accessibility' => 'Toegankelijkheid',
        'best-practices' => 'Praktijken',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'Wat de pagina het meest vertraagt',
        'note' => 'Uit de telefoontest van Google Lighthouse, de grootste besparing eerst.',
        'saves_time' => '−:value s',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => 'Prestaties', 'text' => 'De Lighthouse-prestatiescores op een telefoon en op een computer'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'De snelheidsmaten die Google in zoekresultaten gebruikt, op een telefoon'],
        'Q' => ['title' => 'SEO, toegankelijkheid, praktijken', 'text' => 'De overige Lighthouse-scores van de telefoontest'],
    ],
    'checks' => [
        'P1' => [
            'title' => 'Is de pagina snel op een telefoon?',
            'text' => 'Lighthouse-prestaties op mobiel, 90+',
            'fix' => 'Begin met de lijst „Wat de pagina het meest vertraagt” onder het rapport: die is gesorteerd op de tijd die elke oplossing bespaart. Meestal zijn het zware afbeeldingen, te veel JavaScript en lettertypen die de tekst ophouden.',
            'notes' => [
                'ok' => 'Prestaties op een telefoon: :score van 100.',
                'average' => 'Prestaties op een telefoon: :score van 100. Google telt de snelheid op telefoons mee voor de ranking.',
                'poor' => 'Prestaties op een telefoon: :score van 100. Bezoekers op telefoons wachten en vertrekken.',
                'none' => 'Lighthouse gaf geen score.',
            ],
        ],
        'P2' => [
            'title' => 'Is de pagina snel op een computer?',
            'text' => 'Lighthouse-prestaties op desktop, 90+',
            'fix' => 'De oplossingen zijn dezelfde als voor de telefoon: op een computer wegen ze minder door de snellere processor en het snellere netwerk.',
            'notes' => [
                'ok' => 'Prestaties op een computer: :score van 100.',
                'average' => 'Prestaties op een computer: :score van 100.',
                'poor' => 'Prestaties op een computer: :score van 100: de pagina is zelfs op een snelle computer traag.',
                'none' => 'Lighthouse gaf geen score.',
            ],
        ],
        'V1' => [
            'title' => 'Hoe snel verschijnt de hoofdinhoud?',
            'text' => 'Largest Contentful Paint tot 2,5 s',
            'fix' => 'Versnel de grootste afbeelding of het grootste tekstblok van het eerste scherm: comprimeer de afbeelding en lever haar als WebP of AVIF, laad haar met voorrang en nooit lui, en laat de server sneller antwoorden.',
            'notes' => [
                'ok' => 'De hoofdinhoud verschijnt na :value.',
                'average' => 'De hoofdinhoud verschijnt na :value; goed is tot :good.',
                'poor' => 'De hoofdinhoud verschijnt pas na :value; goed is tot :good. Veel bezoekers zijn dan al weg.',
                'none' => 'Er is geen meting van LCP.',
            ],
        ],
        'V2' => [
            'title' => 'Verspringt de pagina tijdens het laden?',
            'text' => 'Cumulative Layout Shift tot 0,1',
            'fix' => 'Geef elke afbeelding, video en advertentieblok een breedte en hoogte, toon tekst meteen in een reservelettertype en voeg na het laden geen banners boven de inhoud in.',
            'notes' => [
                'ok' => 'De pagina is stabiel: CLS :value.',
                'average' => 'De pagina verspringt een beetje: CLS :value; goed is tot :good.',
                'poor' => 'De pagina verspringt sterk: CLS :value; goed is tot :good. Mensen tikken op de verkeerde knoppen.',
                'none' => 'Er is geen meting van CLS.',
            ],
        ],
        'V3' => [
            'title' => 'Reageert de pagina snel op tikken?',
            'text' => 'Interaction to Next Paint tot 200 ms',
            'fix' => 'Laad minder JavaScript en later: splits de scripts, verwijder ongebruikte bibliotheken en widgets, stel analytics en chats uit tot na het laden van de pagina.',
            'notes' => [
                'ok' => 'De pagina reageert in :value.',
                'average' => 'De pagina reageert in :value; goed is tot :good.',
                'poor' => 'De pagina reageert pas in :value; goed is tot :good. Knoppen lijken kapot.',
                'none' => 'Er is geen meting van de reactietijd.',
            ],
        ],
        'V4' => [
            'title' => 'Antwoordt de server snel?',
            'text' => 'Serverantwoord tot 0,8 s',
            'fix' => 'Versnel de server: zet pagina- en databasecache, compressie en een nieuwere PHP aan, en stap over op betere hosting of een CDN als de server ver van de bezoekers staat.',
            'notes' => [
                'ok' => 'De server antwoordt in :value.',
                'average' => 'De server antwoordt in :value; goed is tot :good.',
                'poor' => 'De server antwoordt pas in :value; goed is tot :good. Al het andere wacht erop.',
                'none' => 'Er is geen meting van het serverantwoord.',
            ],
        ],
        'Q1' => [
            'title' => 'Kunnen zoekmachines de pagina lezen?',
            'text' => 'Lighthouse-SEO, 90+',
            'fix' => 'Open de pagina in Chrome DevTools → Lighthouse → SEO: daar staat elk punt, meestal een ontbrekende meta description, links zonder tekst of te kleine tikgebieden.',
            'notes' => [
                'ok' => 'SEO: :score van 100.',
                'average' => 'SEO: :score van 100.',
                'poor' => 'SEO: :score van 100: zoekmachines kunnen de pagina verkeerd lezen.',
                'none' => 'Lighthouse gaf geen score.',
            ],
        ],
        'Q2' => [
            'title' => 'Kan iedereen de pagina gebruiken?',
            'text' => 'Lighthouse-toegankelijkheid, 90+',
            'fix' => 'Meestal: tekst met te weinig contrast, afbeeldingen zonder alt-tekst, knoppen en velden zonder naam. Chrome DevTools → Lighthouse → Accessibility toont elk geval.',
            'notes' => [
                'ok' => 'Toegankelijkheid: :score van 100.',
                'average' => 'Toegankelijkheid: :score van 100.',
                'poor' => 'Toegankelijkheid: :score van 100: mensen die slecht zien of een schermlezer gebruiken, hebben het moeilijk.',
                'none' => 'Lighthouse gaf geen score.',
            ],
        ],
        'Q3' => [
            'title' => 'Is de pagina volgens moderne regels gebouwd?',
            'text' => 'Lighthouse-praktijken, 90+',
            'fix' => 'Meestal: fouten in de browserconsole, afbeeldingen met een lagere resolutie dan getoond, verouderde bibliotheken met bekende lekken. Chrome DevTools → Lighthouse → Best practices toont elk geval.',
            'notes' => [
                'ok' => 'Praktijken: :score van 100.',
                'average' => 'Praktijken: :score van 100.',
                'poor' => 'Praktijken: :score van 100.',
                'none' => 'Lighthouse gaf geen score.',
            ],
        ],
    ],
];
