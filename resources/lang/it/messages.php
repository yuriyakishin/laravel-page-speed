<?php

return [
    'form' => [
        'label' => 'Indirizzo della pagina',
        'button' => 'Verifica',
        'hint' => 'Gratis · senza registrazione · fino a :count verifiche all\'ora · dura fino a un minuto',
    ],
    'loading' => [
        'mobile' => 'Google carica la pagina su uno smartphone',
        'desktop' => 'Google carica la pagina su un computer',
        'checks' => 'Leggo i Core Web Vitals e i problemi',
    ],
    'errors' => [
        'quota' => 'Il servizio di velocità ha esaurito il limite Google di oggi. Riprovate domani',
        'unreachable' => 'Google non è riuscito ad aprire la pagina. Controllate l\'indirizzo e che il sito funzioni',
        'timeout' => 'Google non ha finito la verifica in tempo. Riprovate',
    ],
    'verdicts' => [
        'ready' => 'La pagina è veloce',
        'almost' => 'La pagina è quasi veloce',
        'partly' => 'La pagina è lenta in alcuni punti',
        'not_ready' => 'La pagina è lenta',
    ],
    'scores' => [
        'title' => 'Punteggi Lighthouse',
        'mobile' => 'Smartphone',
        'desktop' => 'Computer',
        'field_page' => 'I Core Web Vitals qui sotto vengono da veri visitatori Chrome di questa pagina negli ultimi 28 giorni.',
        'field_origin' => 'Questa pagina ha poche visite proprie: i Core Web Vitals qui sotto vengono da veri visitatori di tutto il sito in 28 giorni.',
        'lab_only' => 'Google non ha ancora dati di veri visitatori per questo sito: i Core Web Vitals qui sotto vengono dal test di laboratorio.',
    ],
    'categories' => [
        'performance' => 'Prestazioni',
        'accessibility' => 'Accessibilità',
        'best-practices' => 'Best practice',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'Cosa rallenta di più la pagina',
        'note' => 'Dal test di Google Lighthouse su smartphone, il risparmio maggiore per primo.',
        'saves_time' => '−:value s',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => 'Prestazioni', 'text' => 'I punteggi di prestazioni Lighthouse su smartphone e su computer'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'Le misure di velocità che Google usa nella ricerca, su smartphone'],
        'Q' => ['title' => 'SEO, accessibilità, best practice', 'text' => 'Gli altri punteggi Lighthouse del test su smartphone'],
    ],
    'checks' => [
        'P1' => [
            'title' => 'La pagina è veloce su smartphone?',
            'text' => 'Prestazioni Lighthouse su mobile, 90+',
            'fix' => 'Partite dall\'elenco «Cosa rallenta di più la pagina» sotto il report: è ordinato per il tempo che fa risparmiare ogni correzione. Di solito sono immagini pesanti, troppo JavaScript e font che ritardano il testo.',
            'notes' => [
                'ok' => 'Prestazioni su smartphone: :score su 100.',
                'average' => 'Prestazioni su smartphone: :score su 100. Google considera la velocità su smartphone per il posizionamento.',
                'poor' => 'Prestazioni su smartphone: :score su 100. I visitatori da smartphone aspettano e se ne vanno.',
                'none' => 'Lighthouse non ha dato un punteggio.',
            ],
        ],
        'P2' => [
            'title' => 'La pagina è veloce su computer?',
            'text' => 'Prestazioni Lighthouse su desktop, 90+',
            'fix' => 'Le correzioni sono le stesse dello smartphone: su computer pesano meno grazie a processore e rete più veloci.',
            'notes' => [
                'ok' => 'Prestazioni su computer: :score su 100.',
                'average' => 'Prestazioni su computer: :score su 100.',
                'poor' => 'Prestazioni su computer: :score su 100: la pagina è lenta anche su un computer veloce.',
                'none' => 'Lighthouse non ha dato un punteggio.',
            ],
        ],
        'V1' => [
            'title' => 'Il contenuto principale appare in fretta?',
            'text' => 'Largest Contentful Paint fino a 2,5 s',
            'fix' => 'Velocizzate l\'immagine o il blocco di testo più grande della prima schermata: comprimete l\'immagine e servitela in WebP o AVIF, caricatela con priorità e mai in modo differito, e fate rispondere il server più in fretta.',
            'notes' => [
                'ok' => 'Il contenuto principale appare in :value.',
                'average' => 'Il contenuto principale appare in :value; buono è fino a :good.',
                'poor' => 'Il contenuto principale appare solo in :value; buono è fino a :good. Molti visitatori se ne vanno prima.',
                'none' => 'Non c\'è una misura dell\'LCP.',
            ],
        ],
        'V2' => [
            'title' => 'La pagina salta durante il caricamento?',
            'text' => 'Cumulative Layout Shift fino a 0,1',
            'fix' => 'Date a ogni immagine, video e spazio pubblicitario larghezza e altezza, mostrate subito il testo con un font di riserva e non inserite banner sopra il contenuto dopo il caricamento.',
            'notes' => [
                'ok' => 'La pagina è stabile: CLS :value.',
                'average' => 'La pagina salta un po\': CLS :value; buono è fino a :good.',
                'poor' => 'La pagina salta molto: CLS :value; buono è fino a :good. Le persone toccano i pulsanti sbagliati.',
                'none' => 'Non c\'è una misura del CLS.',
            ],
        ],
        'V3' => [
            'title' => 'La pagina reagisce in fretta ai tocchi?',
            'text' => 'Interaction to Next Paint fino a 200 ms',
            'fix' => 'Caricate meno JavaScript e più tardi: dividete gli script, togliete librerie e widget inutilizzati, rimandate analytics e chat a dopo il caricamento della pagina.',
            'notes' => [
                'ok' => 'La pagina reagisce in :value.',
                'average' => 'La pagina reagisce in :value; buono è fino a :good.',
                'poor' => 'La pagina reagisce solo in :value; buono è fino a :good. I pulsanti sembrano rotti.',
                'none' => 'Non c\'è una misura del tempo di reazione.',
            ],
        ],
        'V4' => [
            'title' => 'Il server risponde in fretta?',
            'text' => 'Risposta del server fino a 0,8 s',
            'fix' => 'Velocizzate il server: attivate la cache delle pagine e del database, la compressione, un PHP più recente, e passate a un hosting migliore o a una CDN se il server è lontano dai visitatori.',
            'notes' => [
                'ok' => 'Il server risponde in :value.',
                'average' => 'Il server risponde in :value; buono è fino a :good.',
                'poor' => 'Il server risponde solo in :value; buono è fino a :good. Tutto il resto lo aspetta.',
                'none' => 'Non c\'è una misura della risposta del server.',
            ],
        ],
        'Q1' => [
            'title' => 'I motori di ricerca possono leggere la pagina?',
            'text' => 'SEO Lighthouse, 90+',
            'fix' => 'Aprite la pagina in Chrome DevTools → Lighthouse → SEO: c\'è ogni punto, di solito una meta description mancante, link senza testo o aree da toccare troppo piccole.',
            'notes' => [
                'ok' => 'SEO: :score su 100.',
                'average' => 'SEO: :score su 100.',
                'poor' => 'SEO: :score su 100: i motori di ricerca potrebbero leggere male la pagina.',
                'none' => 'Lighthouse non ha dato un punteggio.',
            ],
        ],
        'Q2' => [
            'title' => 'Tutti possono usare la pagina?',
            'text' => 'Accessibilità Lighthouse, 90+',
            'fix' => 'Di solito: testo con poco contrasto, immagini senza testo alternativo, pulsanti e campi senza nome. Chrome DevTools → Lighthouse → Accessibility mostra ogni caso.',
            'notes' => [
                'ok' => 'Accessibilità: :score su 100.',
                'average' => 'Accessibilità: :score su 100.',
                'poor' => 'Accessibilità: :score su 100: chi vede poco o usa uno screen reader avrà difficoltà.',
                'none' => 'Lighthouse non ha dato un punteggio.',
            ],
        ],
        'Q3' => [
            'title' => 'La pagina segue le regole moderne?',
            'text' => 'Best practice Lighthouse, 90+',
            'fix' => 'Di solito: errori nella console del browser, immagini a risoluzione più bassa di quella mostrata, librerie obsolete con falle note. Chrome DevTools → Lighthouse → Best practices mostra ogni caso.',
            'notes' => [
                'ok' => 'Best practice: :score su 100.',
                'average' => 'Best practice: :score su 100.',
                'poor' => 'Best practice: :score su 100.',
                'none' => 'Lighthouse non ha dato un punteggio.',
            ],
        ],
    ],
];
