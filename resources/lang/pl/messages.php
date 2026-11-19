<?php

declare(strict_types=1);

return [
    'form' => [
        'label' => 'Adres strony',
        'button' => 'Sprawdź',
        'hint' => 'Za darmo · bez rejestracji · do :count sprawdzeń na godzinę · trwa do minuty',
    ],
    'loading' => [
        'mobile' => 'Google wczytuje stronę na telefonie',
        'desktop' => 'Google wczytuje stronę na komputerze',
        'checks' => 'Odczytuję Core Web Vitals i problemy',
    ],
    'errors' => [
        'quota' => 'Usługa szybkości wyczerpała dzienny limit Google. Spróbuj jutro',
        'unreachable' => 'Google nie zdołał otworzyć strony. Sprawdź adres i czy strona działa',
        'timeout' => 'Google nie zakończył sprawdzania na czas. Spróbuj ponownie',
    ],
    'verdicts' => [
        'ready' => 'Strona jest szybka',
        'almost' => 'Strona jest prawie szybka',
        'partly' => 'Strona miejscami jest wolna',
        'not_ready' => 'Strona jest wolna',
    ],
    'scores' => [
        'title' => 'Wyniki Lighthouse',
        'mobile' => 'Telefon',
        'desktop' => 'Komputer',
        'field_page' => 'Core Web Vitals poniżej pochodzą od prawdziwych użytkowników Chrome tej strony z ostatnich 28 dni.',
        'field_origin' => 'Ta strona ma za mało własnych odwiedzin: Core Web Vitals poniżej pochodzą od prawdziwych użytkowników całego serwisu z 28 dni.',
        'lab_only' => 'Google nie ma jeszcze danych od prawdziwych użytkowników tego serwisu: Core Web Vitals poniżej pochodzą z testu laboratoryjnego.',
    ],
    'categories' => [
        'performance' => 'Wydajność',
        'accessibility' => 'Dostępność',
        'best-practices' => 'Dobre praktyki',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'Co najbardziej spowalnia stronę',
        'note' => 'Z testu Google Lighthouse na telefonie, od największej oszczędności.',
        'saves_time' => '−:value s',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => 'Wydajność', 'text' => 'Wyniki wydajności Lighthouse na telefonie i na komputerze'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'Wskaźniki szybkości, które Google uwzględnia w wyszukiwaniu, na telefonie'],
        'Q' => ['title' => 'SEO, dostępność, dobre praktyki', 'text' => 'Pozostałe wyniki Lighthouse z testu na telefonie'],
    ],
    'checks' => [
        'P1' => [
            'title' => 'Czy strona jest szybka na telefonie?',
            'text' => 'Wydajność Lighthouse na urządzeniu mobilnym, 90+',
            'fix' => 'Zacznij od listy „Co najbardziej spowalnia stronę” pod raportem: jest posortowana według czasu, jaki oszczędza każda poprawka. Najczęściej to ciężkie obrazy, za dużo JavaScriptu i czcionki, które opóźniają tekst.',
            'notes' => [
                'ok' => 'Wydajność na telefonie: :score na 100.',
                'average' => 'Wydajność na telefonie: :score na 100. Google uwzględnia szybkość na telefonie w rankingu.',
                'poor' => 'Wydajność na telefonie: :score na 100. Odwiedzający z telefonów czekają i wychodzą.',
                'none' => 'Lighthouse nie podał wyniku.',
            ],
        ],
        'P2' => [
            'title' => 'Czy strona jest szybka na komputerze?',
            'text' => 'Wydajność Lighthouse na komputerze, 90+',
            'fix' => 'Poprawki są te same co dla telefonu: na komputerze mają mniejsze znaczenie dzięki szybszemu procesorowi i sieci.',
            'notes' => [
                'ok' => 'Wydajność na komputerze: :score na 100.',
                'average' => 'Wydajność na komputerze: :score na 100.',
                'poor' => 'Wydajność na komputerze: :score na 100: strona jest wolna nawet na szybkim komputerze.',
                'none' => 'Lighthouse nie podał wyniku.',
            ],
        ],
        'V1' => [
            'title' => 'Jak szybko pojawia się główna treść?',
            'text' => 'Largest Contentful Paint do 2,5 s',
            'fix' => 'Przyspiesz największy obraz lub blok tekstu pierwszego ekranu: skompresuj obraz i serwuj go jako WebP lub AVIF, wczytuj go priorytetowo i nigdy leniwie, i spraw, by serwer odpowiadał szybciej.',
            'notes' => [
                'ok' => 'Główna treść pojawia się po :value.',
                'average' => 'Główna treść pojawia się po :value; dobrze jest do :good.',
                'poor' => 'Główna treść pojawia się dopiero po :value; dobrze jest do :good. Wielu odwiedzających wychodzi wcześniej.',
                'none' => 'Brak pomiaru LCP.',
            ],
        ],
        'V2' => [
            'title' => 'Czy strona skacze podczas wczytywania?',
            'text' => 'Cumulative Layout Shift do 0,1',
            'fix' => 'Nadaj każdemu obrazowi, filmowi i blokowi reklamowemu szerokość i wysokość, pokazuj tekst od razu zastępczą czcionką i nie wstawiaj banerów nad treścią po wczytaniu strony.',
            'notes' => [
                'ok' => 'Strona jest stabilna: CLS :value.',
                'average' => 'Strona trochę skacze: CLS :value; dobrze jest do :good.',
                'poor' => 'Strona mocno skacze: CLS :value; dobrze jest do :good. Ludzie klikają nie te przyciski.',
                'none' => 'Brak pomiaru CLS.',
            ],
        ],
        'V3' => [
            'title' => 'Czy strona szybko reaguje na dotyk?',
            'text' => 'Interaction to Next Paint do 200 ms',
            'fix' => 'Wczytuj mniej JavaScriptu i później: podziel skrypty, usuń nieużywane biblioteki i widżety, odłóż analitykę i czaty do czasu wczytania strony.',
            'notes' => [
                'ok' => 'Strona reaguje w :value.',
                'average' => 'Strona reaguje w :value; dobrze jest do :good.',
                'poor' => 'Strona reaguje dopiero po :value; dobrze jest do :good. Przyciski wydają się zepsute.',
                'none' => 'Brak pomiaru czasu reakcji.',
            ],
        ],
        'V4' => [
            'title' => 'Czy serwer szybko odpowiada?',
            'text' => 'Odpowiedź serwera do 0,8 s',
            'fix' => 'Przyspiesz serwer: włącz cache stron i bazy danych, kompresję, nowsze PHP, i przejdź na lepszy hosting lub CDN, jeśli serwer jest daleko od odwiedzających.',
            'notes' => [
                'ok' => 'Serwer odpowiada w :value.',
                'average' => 'Serwer odpowiada w :value; dobrze jest do :good.',
                'poor' => 'Serwer odpowiada dopiero po :value; dobrze jest do :good. Wszystko inne na niego czeka.',
                'none' => 'Brak pomiaru odpowiedzi serwera.',
            ],
        ],
        'Q1' => [
            'title' => 'Czy wyszukiwarki mogą odczytać stronę?',
            'text' => 'SEO w Lighthouse, 90+',
            'fix' => 'Otwórz stronę w Chrome DevTools → Lighthouse → SEO: jest tam każdy punkt, najczęściej brak meta description, linki bez tekstu lub za małe elementy do kliknięcia.',
            'notes' => [
                'ok' => 'SEO: :score na 100.',
                'average' => 'SEO: :score na 100.',
                'poor' => 'SEO: :score na 100: wyszukiwarki mogą źle odczytać stronę.',
                'none' => 'Lighthouse nie podał wyniku.',
            ],
        ],
        'Q2' => [
            'title' => 'Czy każdy może korzystać ze strony?',
            'text' => 'Dostępność w Lighthouse, 90+',
            'fix' => 'Najczęściej: tekst o za słabym kontraście, obrazy bez tekstu alternatywnego, przyciski i pola bez nazw. Chrome DevTools → Lighthouse → Accessibility pokazuje każdy przypadek.',
            'notes' => [
                'ok' => 'Dostępność: :score na 100.',
                'average' => 'Dostępność: :score na 100.',
                'poor' => 'Dostępność: :score na 100: osobom słabowidzącym lub korzystającym z czytników ekranu będzie trudno.',
                'none' => 'Lighthouse nie podał wyniku.',
            ],
        ],
        'Q3' => [
            'title' => 'Czy strona jest zbudowana według nowoczesnych zasad?',
            'text' => 'Dobre praktyki w Lighthouse, 90+',
            'fix' => 'Najczęściej: błędy w konsoli przeglądarki, obrazy w niższej rozdzielczości niż wyświetlana, przestarzałe biblioteki ze znanymi lukami. Chrome DevTools → Lighthouse → Best practices pokazuje każdy przypadek.',
            'notes' => [
                'ok' => 'Dobre praktyki: :score na 100.',
                'average' => 'Dobre praktyki: :score na 100.',
                'poor' => 'Dobre praktyki: :score na 100.',
                'none' => 'Lighthouse nie podał wyniku.',
            ],
        ],
    ],
];
