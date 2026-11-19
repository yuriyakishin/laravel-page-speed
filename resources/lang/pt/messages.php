<?php

declare(strict_types=1);

return [
    'form' => [
        'label' => 'Endereço da página',
        'button' => 'Verificar',
        'hint' => 'Grátis · sem registo · até :count verificações por hora · demora até um minuto',
    ],
    'loading' => [
        'mobile' => 'O Google está a carregar a página num telemóvel',
        'desktop' => 'O Google está a carregar a página num computador',
        'checks' => 'A ler as Core Web Vitals e os problemas',
    ],
    'errors' => [
        'quota' => 'O serviço de velocidade esgotou o limite do Google por hoje. Tente amanhã',
        'unreachable' => 'O Google não conseguiu abrir a página. Confirme o endereço e se o site está a funcionar',
        'timeout' => 'O Google não terminou a verificação a tempo. Tente outra vez',
    ],
    'verdicts' => [
        'ready' => 'A página é rápida',
        'almost' => 'A página é quase rápida',
        'partly' => 'A página é lenta em alguns pontos',
        'not_ready' => 'A página é lenta',
    ],
    'scores' => [
        'title' => 'Pontuações Lighthouse',
        'mobile' => 'Telemóvel',
        'desktop' => 'Computador',
        'field_page' => 'As Core Web Vitals abaixo vêm de visitantes reais do Chrome desta página nos últimos 28 dias.',
        'field_origin' => 'Esta página tem poucas visitas próprias: as Core Web Vitals abaixo vêm de visitantes reais de todo o site em 28 dias.',
        'lab_only' => 'O Google ainda não tem dados de visitantes reais deste site: as Core Web Vitals abaixo vêm do teste de laboratório.',
    ],
    'categories' => [
        'performance' => 'Desempenho',
        'accessibility' => 'Acessibilidade',
        'best-practices' => 'Boas práticas',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'O que mais atrasa a página',
        'note' => 'Do teste do Google Lighthouse no telemóvel, a maior poupança primeiro.',
        'saves_time' => '−:value s',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => 'Desempenho', 'text' => 'As pontuações de desempenho Lighthouse no telemóvel e no computador'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'As medidas de velocidade que o Google usa na pesquisa, no telemóvel'],
        'Q' => ['title' => 'SEO, acessibilidade, boas práticas', 'text' => 'As outras pontuações Lighthouse do teste no telemóvel'],
    ],
    'checks' => [
        'P1' => [
            'title' => 'A página é rápida no telemóvel?',
            'text' => 'Desempenho Lighthouse no telemóvel, 90+',
            'fix' => 'Comece pela lista «O que mais atrasa a página» por baixo do relatório: está ordenada pelo tempo que cada correção poupa. O mais habitual são imagens pesadas, demasiado JavaScript e tipos de letra que atrasam o texto.',
            'notes' => [
                'ok' => 'Desempenho no telemóvel: :score de 100.',
                'average' => 'Desempenho no telemóvel: :score de 100. O Google tem em conta a velocidade no telemóvel na classificação.',
                'poor' => 'Desempenho no telemóvel: :score de 100. Quem visita pelo telemóvel espera e sai.',
                'none' => 'O Lighthouse não deu pontuação.',
            ],
        ],
        'P2' => [
            'title' => 'A página é rápida no computador?',
            'text' => 'Desempenho Lighthouse no computador, 90+',
            'fix' => 'As correções são as mesmas do telemóvel: no computador pesam menos graças ao processador e à rede mais rápidos.',
            'notes' => [
                'ok' => 'Desempenho no computador: :score de 100.',
                'average' => 'Desempenho no computador: :score de 100.',
                'poor' => 'Desempenho no computador: :score de 100: a página é lenta mesmo num computador rápido.',
                'none' => 'O Lighthouse não deu pontuação.',
            ],
        ],
        'V1' => [
            'title' => 'O conteúdo principal aparece depressa?',
            'text' => 'Largest Contentful Paint até 2,5 s',
            'fix' => 'Acelere a maior imagem ou bloco de texto do primeiro ecrã: comprima a imagem e sirva-a em WebP ou AVIF, carregue-a com prioridade e nunca em diferido, e faça o servidor responder mais depressa.',
            'notes' => [
                'ok' => 'O conteúdo principal aparece em :value.',
                'average' => 'O conteúdo principal aparece em :value; o bom é até :good.',
                'poor' => 'O conteúdo principal só aparece em :value; o bom é até :good. Muitos visitantes saem antes.',
                'none' => 'Não há medição do LCP.',
            ],
        ],
        'V2' => [
            'title' => 'A página salta enquanto carrega?',
            'text' => 'Cumulative Layout Shift até 0,1',
            'fix' => 'Dê a cada imagem, vídeo e bloco de anúncios a largura e a altura, mostre o texto de imediato num tipo de letra de recurso e não insira banners acima do conteúdo depois de a página carregar.',
            'notes' => [
                'ok' => 'A página é estável: CLS :value.',
                'average' => 'A página salta um pouco: CLS :value; o bom é até :good.',
                'poor' => 'A página salta muito: CLS :value; o bom é até :good. As pessoas tocam nos botões errados.',
                'none' => 'Não há medição do CLS.',
            ],
        ],
        'V3' => [
            'title' => 'A página reage depressa aos toques?',
            'text' => 'Interaction to Next Paint até 200 ms',
            'fix' => 'Carregue menos JavaScript e mais tarde: divida os scripts, retire bibliotecas e widgets que não usa, adie a análise e os chats para depois de a página carregar.',
            'notes' => [
                'ok' => 'A página reage em :value.',
                'average' => 'A página reage em :value; o bom é até :good.',
                'poor' => 'A página só reage em :value; o bom é até :good. Os botões parecem avariados.',
                'none' => 'Não há medição do tempo de reação.',
            ],
        ],
        'V4' => [
            'title' => 'O servidor responde depressa?',
            'text' => 'Resposta do servidor até 0,8 s',
            'fix' => 'Acelere o servidor: ative a cache de páginas e da base de dados, a compressão, um PHP mais recente, e mude para um alojamento melhor ou uma CDN se o servidor estiver longe dos visitantes.',
            'notes' => [
                'ok' => 'O servidor responde em :value.',
                'average' => 'O servidor responde em :value; o bom é até :good.',
                'poor' => 'O servidor só responde em :value; o bom é até :good. Tudo o resto espera por ele.',
                'none' => 'Não há medição da resposta do servidor.',
            ],
        ],
        'Q1' => [
            'title' => 'Os motores de busca conseguem ler a página?',
            'text' => 'SEO Lighthouse, 90+',
            'fix' => 'Abra a página no Chrome DevTools → Lighthouse → SEO: lá está cada ponto, o mais habitual uma meta description em falta, ligações sem texto ou áreas de toque pequenas demais.',
            'notes' => [
                'ok' => 'SEO: :score de 100.',
                'average' => 'SEO: :score de 100.',
                'poor' => 'SEO: :score de 100: os motores de busca podem ler mal a página.',
                'none' => 'O Lighthouse não deu pontuação.',
            ],
        ],
        'Q2' => [
            'title' => 'Todos conseguem usar a página?',
            'text' => 'Acessibilidade Lighthouse, 90+',
            'fix' => 'O mais habitual: texto com pouco contraste, imagens sem texto alternativo, botões e campos sem nome. O Chrome DevTools → Lighthouse → Accessibility mostra cada caso.',
            'notes' => [
                'ok' => 'Acessibilidade: :score de 100.',
                'average' => 'Acessibilidade: :score de 100.',
                'poor' => 'Acessibilidade: :score de 100: quem vê mal ou usa leitor de ecrã vai ter dificuldades.',
                'none' => 'O Lighthouse não deu pontuação.',
            ],
        ],
        'Q3' => [
            'title' => 'A página segue as regras modernas?',
            'text' => 'Boas práticas Lighthouse, 90+',
            'fix' => 'O mais habitual: erros na consola do browser, imagens com menos resolução do que a mostrada, bibliotecas desatualizadas com falhas conhecidas. O Chrome DevTools → Lighthouse → Best practices mostra cada caso.',
            'notes' => [
                'ok' => 'Boas práticas: :score de 100.',
                'average' => 'Boas práticas: :score de 100.',
                'poor' => 'Boas práticas: :score de 100.',
                'none' => 'O Lighthouse não deu pontuação.',
            ],
        ],
    ],
];
