<?php

declare(strict_types=1);

return [
    'form' => [
        'label' => 'Adresa stránky',
        'button' => 'Zkontrolovat',
        'hint' => 'Zdarma · bez registrace · až :count kontrol za hodinu · trvá až minutu',
    ],
    'loading' => [
        'mobile' => 'Google načítá stránku na telefonu',
        'desktop' => 'Google načítá stránku na počítači',
        'checks' => 'Čtu Core Web Vitals a problémy',
    ],
    'errors' => [
        'quota' => 'Služba rychlosti vyčerpala dnešní limit Googlu. Zkuste to zítra',
        'unreachable' => 'Google nedokázal stránku otevřít. Zkontrolujte adresu a zda web funguje',
        'timeout' => 'Google kontrolu nestihl dokončit. Zkuste to znovu',
    ],
    'verdicts' => [
        'ready' => 'Stránka je rychlá',
        'almost' => 'Stránka je téměř rychlá',
        'partly' => 'Stránka je místy pomalá',
        'not_ready' => 'Stránka je pomalá',
    ],
    'scores' => [
        'title' => 'Skóre Lighthouse',
        'mobile' => 'Telefon',
        'desktop' => 'Počítač',
        'field_page' => 'Core Web Vitals níže jsou od skutečných návštěvníků této stránky v Chromu za posledních 28 dní.',
        'field_origin' => 'Tato stránka má málo vlastních návštěv: Core Web Vitals níže jsou od skutečných návštěvníků celého webu za 28 dní.',
        'lab_only' => 'Google zatím nemá data skutečných návštěvníků tohoto webu: Core Web Vitals níže jsou z laboratorního testu.',
    ],
    'categories' => [
        'performance' => 'Výkon',
        'accessibility' => 'Přístupnost',
        'best-practices' => 'Osvědčené postupy',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'Co stránku nejvíc zpomaluje',
        'note' => 'Z testu Google Lighthouse na telefonu, od největší úspory.',
        'saves_time' => '−:value s',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => 'Výkon', 'text' => 'Skóre výkonu Lighthouse na telefonu a na počítači'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'Ukazatele rychlosti, které Google používá ve vyhledávání, na telefonu'],
        'Q' => ['title' => 'SEO, přístupnost, postupy', 'text' => 'Ostatní skóre Lighthouse z testu na telefonu'],
    ],
    'checks' => [
        'P1' => [
            'title' => 'Je stránka rychlá na telefonu?',
            'text' => 'Výkon Lighthouse na mobilu, 90+',
            'fix' => 'Začněte seznamem „Co stránku nejvíc zpomaluje“ pod reportem: je seřazený podle času, který každá oprava ušetří. Nejčastěji jde o těžké obrázky, příliš mnoho JavaScriptu a písma, která zdržují text.',
            'notes' => [
                'ok' => 'Výkon na telefonu: :score ze 100.',
                'average' => 'Výkon na telefonu: :score ze 100. Google rychlost na telefonu započítává do hodnocení.',
                'poor' => 'Výkon na telefonu: :score ze 100. Návštěvníci z telefonů čekají a odcházejí.',
                'none' => 'Lighthouse nedal skóre.',
            ],
        ],
        'P2' => [
            'title' => 'Je stránka rychlá na počítači?',
            'text' => 'Výkon Lighthouse na desktopu, 90+',
            'fix' => 'Opravy jsou stejné jako pro telefon: na počítači se díky rychlejšímu procesoru a síti projevují méně.',
            'notes' => [
                'ok' => 'Výkon na počítači: :score ze 100.',
                'average' => 'Výkon na počítači: :score ze 100.',
                'poor' => 'Výkon na počítači: :score ze 100: stránka je pomalá i na rychlém počítači.',
                'none' => 'Lighthouse nedal skóre.',
            ],
        ],
        'V1' => [
            'title' => 'Jak rychle se objeví hlavní obsah?',
            'text' => 'Largest Contentful Paint do 2,5 s',
            'fix' => 'Zrychlete největší obrázek nebo blok textu první obrazovky: obrázek zkomprimujte a posílejte jako WebP nebo AVIF, načítejte ho přednostně a nikdy líně, a zrychlete odpověď serveru.',
            'notes' => [
                'ok' => 'Hlavní obsah se objeví za :value.',
                'average' => 'Hlavní obsah se objeví za :value; dobré je do :good.',
                'poor' => 'Hlavní obsah se objeví až za :value; dobré je do :good. Mnoho návštěvníků odejde dřív.',
                'none' => 'Chybí měření LCP.',
            ],
        ],
        'V2' => [
            'title' => 'Skáče stránka při načítání?',
            'text' => 'Cumulative Layout Shift do 0,1',
            'fix' => 'Dejte každému obrázku, videu a reklamnímu bloku šířku a výšku, ukažte text hned náhradním písmem a nevkládejte bannery nad obsah po načtení stránky.',
            'notes' => [
                'ok' => 'Stránka je stabilní: CLS :value.',
                'average' => 'Stránka trochu skáče: CLS :value; dobré je do :good.',
                'poor' => 'Stránka hodně skáče: CLS :value; dobré je do :good. Lidé klikají na špatná tlačítka.',
                'none' => 'Chybí měření CLS.',
            ],
        ],
        'V3' => [
            'title' => 'Reaguje stránka rychle na klepnutí?',
            'text' => 'Interaction to Next Paint do 200 ms',
            'fix' => 'Načítejte méně JavaScriptu a později: rozdělte skripty, odstraňte nepoužívané knihovny a widgety, odložte analytiku a chaty až po načtení stránky.',
            'notes' => [
                'ok' => 'Stránka reaguje za :value.',
                'average' => 'Stránka reaguje za :value; dobré je do :good.',
                'poor' => 'Stránka reaguje až za :value; dobré je do :good. Tlačítka působí rozbitě.',
                'none' => 'Chybí měření doby reakce.',
            ],
        ],
        'V4' => [
            'title' => 'Odpovídá server rychle?',
            'text' => 'Odpověď serveru do 0,8 s',
            'fix' => 'Zrychlete server: zapněte cache stránek a databáze, kompresi, novější PHP a přejděte na lepší hosting nebo CDN, pokud je server daleko od návštěvníků.',
            'notes' => [
                'ok' => 'Server odpovídá za :value.',
                'average' => 'Server odpovídá za :value; dobré je do :good.',
                'poor' => 'Server odpovídá až za :value; dobré je do :good. Všechno ostatní na něj čeká.',
                'none' => 'Chybí měření odpovědi serveru.',
            ],
        ],
        'Q1' => [
            'title' => 'Dokážou vyhledávače stránku přečíst?',
            'text' => 'SEO v Lighthouse, 90+',
            'fix' => 'Otevřete stránku v Chrome DevTools → Lighthouse → SEO: najdete tam každý bod, nejčastěji chybějící meta description, odkazy bez textu nebo příliš malé dotykové prvky.',
            'notes' => [
                'ok' => 'SEO: :score ze 100.',
                'average' => 'SEO: :score ze 100.',
                'poor' => 'SEO: :score ze 100: vyhledávače mohou stránku špatně přečíst.',
                'none' => 'Lighthouse nedal skóre.',
            ],
        ],
        'Q2' => [
            'title' => 'Mohou stránku používat všichni?',
            'text' => 'Přístupnost v Lighthouse, 90+',
            'fix' => 'Nejčastěji: text s nízkým kontrastem, obrázky bez alternativního textu, tlačítka a pole bez názvů. Chrome DevTools → Lighthouse → Accessibility ukáže každý případ.',
            'notes' => [
                'ok' => 'Přístupnost: :score ze 100.',
                'average' => 'Přístupnost: :score ze 100.',
                'poor' => 'Přístupnost: :score ze 100: lidé se slabým zrakem nebo se čtečkou obrazovky to budou mít těžké.',
                'none' => 'Lighthouse nedal skóre.',
            ],
        ],
        'Q3' => [
            'title' => 'Je stránka postavená podle moderních pravidel?',
            'text' => 'Osvědčené postupy v Lighthouse, 90+',
            'fix' => 'Nejčastěji: chyby v konzoli prohlížeče, obrázky v nižším rozlišení, než se zobrazují, zastaralé knihovny se známými chybami. Chrome DevTools → Lighthouse → Best practices ukáže každý případ.',
            'notes' => [
                'ok' => 'Osvědčené postupy: :score ze 100.',
                'average' => 'Osvědčené postupy: :score ze 100.',
                'poor' => 'Osvědčené postupy: :score ze 100.',
                'none' => 'Lighthouse nedal skóre.',
            ],
        ],
    ],
];
