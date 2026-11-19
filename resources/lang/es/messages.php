<?php

return [
    'form' => [
        'label' => 'Dirección de la página',
        'button' => 'Comprobar',
        'hint' => 'Gratis · sin registro · hasta :count comprobaciones por hora · tarda hasta un minuto',
    ],
    'loading' => [
        'mobile' => 'Google está cargando la página en un móvil',
        'desktop' => 'Google está cargando la página en un ordenador',
        'checks' => 'Leyendo las Core Web Vitals y los problemas',
    ],
    'errors' => [
        'quota' => 'El servicio de velocidad ha agotado su límite de Google por hoy. Vuelva a intentarlo mañana',
        'unreachable' => 'Google no pudo abrir la página. Revise la dirección y que el sitio funciona',
        'timeout' => 'Google no terminó la comprobación a tiempo. Vuelva a intentarlo',
    ],
    'verdicts' => [
        'ready' => 'La página es rápida',
        'almost' => 'La página es casi rápida',
        'partly' => 'La página es lenta en algunos puntos',
        'not_ready' => 'La página es lenta',
    ],
    'scores' => [
        'title' => 'Puntuaciones de Lighthouse',
        'mobile' => 'Móvil',
        'desktop' => 'Ordenador',
        'field_page' => 'Las Core Web Vitals de abajo son de visitantes reales de Chrome de esta página en los últimos 28 días.',
        'field_origin' => 'Esta página tiene pocas visitas propias: las Core Web Vitals de abajo son de visitantes reales de todo el sitio en 28 días.',
        'lab_only' => 'Google aún no tiene datos de visitantes reales de este sitio: las Core Web Vitals de abajo son de la prueba de laboratorio.',
    ],
    'categories' => [
        'performance' => 'Rendimiento',
        'accessibility' => 'Accesibilidad',
        'best-practices' => 'Buenas prácticas',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'Lo que más ralentiza la página',
        'note' => 'De la prueba de Google Lighthouse en móvil, primero el mayor ahorro.',
        'saves_time' => '−:value s',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => 'Rendimiento', 'text' => 'Las puntuaciones de rendimiento de Lighthouse en móvil y en ordenador'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'Las medidas de velocidad que Google usa en la búsqueda, en móvil'],
        'Q' => ['title' => 'SEO, accesibilidad, buenas prácticas', 'text' => 'Las demás puntuaciones de Lighthouse de la prueba en móvil'],
    ],
    'checks' => [
        'P1' => [
            'title' => '¿Es rápida la página en el móvil?',
            'text' => 'Rendimiento de Lighthouse en móvil, 90+',
            'fix' => 'Empiece por la lista «Lo que más ralentiza la página» bajo el informe: está ordenada por el tiempo que ahorra cada arreglo. Lo más habitual son imágenes pesadas, demasiado JavaScript y fuentes que retrasan el texto.',
            'notes' => [
                'ok' => 'Rendimiento en móvil: :score de 100.',
                'average' => 'Rendimiento en móvil: :score de 100. Google tiene en cuenta la velocidad en móvil para el posicionamiento.',
                'poor' => 'Rendimiento en móvil: :score de 100. Los visitantes desde el móvil esperan y se van.',
                'none' => 'Lighthouse no dio puntuación.',
            ],
        ],
        'P2' => [
            'title' => '¿Es rápida la página en el ordenador?',
            'text' => 'Rendimiento de Lighthouse en escritorio, 90+',
            'fix' => 'Los arreglos son los mismos que para el móvil: en el ordenador pesan menos por el procesador y la red más rápidos.',
            'notes' => [
                'ok' => 'Rendimiento en ordenador: :score de 100.',
                'average' => 'Rendimiento en ordenador: :score de 100.',
                'poor' => 'Rendimiento en ordenador: :score de 100: la página es lenta incluso en un ordenador rápido.',
                'none' => 'Lighthouse no dio puntuación.',
            ],
        ],
        'V1' => [
            'title' => '¿Aparece rápido el contenido principal?',
            'text' => 'Largest Contentful Paint hasta 2,5 s',
            'fix' => 'Acelere la imagen o el bloque de texto más grande de la primera pantalla: comprima la imagen y sírvala en WebP o AVIF, cárguela con prioridad y nunca en diferido, y haga que el servidor responda más rápido.',
            'notes' => [
                'ok' => 'El contenido principal aparece en :value.',
                'average' => 'El contenido principal aparece en :value; lo bueno es hasta :good.',
                'poor' => 'El contenido principal no aparece hasta :value; lo bueno es hasta :good. Muchos visitantes se van antes.',
                'none' => 'No hay medición del LCP.',
            ],
        ],
        'V2' => [
            'title' => '¿Salta la página mientras carga?',
            'text' => 'Cumulative Layout Shift hasta 0,1',
            'fix' => 'Dé a cada imagen, vídeo y bloque de anuncios su ancho y alto, muestre el texto al instante con una fuente de reserva y no inserte banners encima del contenido tras cargar la página.',
            'notes' => [
                'ok' => 'La página es estable: CLS :value.',
                'average' => 'La página salta un poco: CLS :value; lo bueno es hasta :good.',
                'poor' => 'La página salta mucho: CLS :value; lo bueno es hasta :good. La gente pulsa los botones equivocados.',
                'none' => 'No hay medición del CLS.',
            ],
        ],
        'V3' => [
            'title' => '¿Reacciona rápido la página a los toques?',
            'text' => 'Interaction to Next Paint hasta 200 ms',
            'fix' => 'Cargue menos JavaScript y más tarde: divida los scripts, quite bibliotecas y widgets que no se usan, aplace la analítica y los chats hasta que cargue la página.',
            'notes' => [
                'ok' => 'La página reacciona en :value.',
                'average' => 'La página reacciona en :value; lo bueno es hasta :good.',
                'poor' => 'La página no reacciona hasta :value; lo bueno es hasta :good. Los botones parecen rotos.',
                'none' => 'No hay medición del tiempo de reacción.',
            ],
        ],
        'V4' => [
            'title' => '¿Responde rápido el servidor?',
            'text' => 'Respuesta del servidor hasta 0,8 s',
            'fix' => 'Acelere el servidor: active la caché de páginas y de base de datos, la compresión, un PHP más reciente, y pase a un hosting mejor o a una CDN si el servidor está lejos de los visitantes.',
            'notes' => [
                'ok' => 'El servidor responde en :value.',
                'average' => 'El servidor responde en :value; lo bueno es hasta :good.',
                'poor' => 'El servidor no responde hasta :value; lo bueno es hasta :good. Todo lo demás lo espera.',
                'none' => 'No hay medición de la respuesta del servidor.',
            ],
        ],
        'Q1' => [
            'title' => '¿Pueden los buscadores leer la página?',
            'text' => 'SEO de Lighthouse, 90+',
            'fix' => 'Abra la página en Chrome DevTools → Lighthouse → SEO: ahí está cada punto, lo más habitual una meta description que falta, enlaces sin texto o zonas táctiles demasiado pequeñas.',
            'notes' => [
                'ok' => 'SEO: :score de 100.',
                'average' => 'SEO: :score de 100.',
                'poor' => 'SEO: :score de 100: los buscadores pueden leer mal la página.',
                'none' => 'Lighthouse no dio puntuación.',
            ],
        ],
        'Q2' => [
            'title' => '¿Puede todo el mundo usar la página?',
            'text' => 'Accesibilidad de Lighthouse, 90+',
            'fix' => 'Lo más habitual: texto con poco contraste, imágenes sin texto alternativo, botones y campos sin nombre. Chrome DevTools → Lighthouse → Accessibility muestra cada caso.',
            'notes' => [
                'ok' => 'Accesibilidad: :score de 100.',
                'average' => 'Accesibilidad: :score de 100.',
                'poor' => 'Accesibilidad: :score de 100: a las personas con poca vista o con lector de pantalla les costará.',
                'none' => 'Lighthouse no dio puntuación.',
            ],
        ],
        'Q3' => [
            'title' => '¿Está hecha la página con reglas modernas?',
            'text' => 'Buenas prácticas de Lighthouse, 90+',
            'fix' => 'Lo más habitual: errores en la consola del navegador, imágenes con menos resolución de la que se muestra, bibliotecas obsoletas con fallos conocidos. Chrome DevTools → Lighthouse → Best practices muestra cada caso.',
            'notes' => [
                'ok' => 'Buenas prácticas: :score de 100.',
                'average' => 'Buenas prácticas: :score de 100.',
                'poor' => 'Buenas prácticas: :score de 100.',
                'none' => 'Lighthouse no dio puntuación.',
            ],
        ],
    ],
];
