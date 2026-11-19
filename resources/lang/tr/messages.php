<?php

return [
    'form' => [
        'label' => 'Sayfa adresi',
        'button' => 'Kontrol et',
        'hint' => 'Ücretsiz · kayıt yok · saatte en fazla :count kontrol · bir dakikaya kadar sürer',
    ],
    'loading' => [
        'mobile' => 'Google sayfayı bir telefonda yüklüyor',
        'desktop' => 'Google sayfayı bir bilgisayarda yüklüyor',
        'checks' => 'Core Web Vitals ve sorunlar okunuyor',
    ],
    'errors' => [
        'quota' => 'Hız hizmeti bugünkü Google sınırını doldurdu. Yarın tekrar deneyin',
        'unreachable' => 'Google sayfayı açamadı. Adresi ve sitenin çalıştığını kontrol edin',
        'timeout' => 'Google kontrolü zamanında bitiremedi. Tekrar deneyin',
    ],
    'verdicts' => [
        'ready' => 'Sayfa hızlı',
        'almost' => 'Sayfa neredeyse hızlı',
        'partly' => 'Sayfa yer yer yavaş',
        'not_ready' => 'Sayfa yavaş',
    ],
    'scores' => [
        'title' => 'Lighthouse puanları',
        'mobile' => 'Telefon',
        'desktop' => 'Bilgisayar',
        'field_page' => 'Aşağıdaki Core Web Vitals, bu sayfanın son 28 gündeki gerçek Chrome ziyaretçilerinden geliyor.',
        'field_origin' => 'Bu sayfanın kendi ziyareti çok az: aşağıdaki Core Web Vitals, tüm sitenin 28 gündeki gerçek ziyaretçilerinden geliyor.',
        'lab_only' => 'Google\'ın bu site için henüz gerçek ziyaretçi verisi yok: aşağıdaki Core Web Vitals laboratuvar testinden geliyor.',
    ],
    'categories' => [
        'performance' => 'Performans',
        'accessibility' => 'Erişilebilirlik',
        'best-practices' => 'En iyi uygulamalar',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'Sayfayı en çok yavaşlatanlar',
        'note' => 'Google Lighthouse telefon testinden, en büyük kazanç önce.',
        'saves_time' => '−:value sn',
        'saves_bytes' => '−:value KB',
    ],
    'groups' => [
        'P' => ['title' => 'Performans', 'text' => 'Telefonda ve bilgisayarda Lighthouse performans puanları'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'Google\'ın aramada kullandığı hız ölçüleri, telefonda'],
        'Q' => ['title' => 'SEO, erişilebilirlik, en iyi uygulamalar', 'text' => 'Telefon testinin diğer Lighthouse puanları'],
    ],
    'checks' => [
        'P1' => [
            'title' => 'Sayfa telefonda hızlı mı?',
            'text' => 'Mobilde Lighthouse performansı, 90+',
            'fix' => 'Raporun altındaki «Sayfayı en çok yavaşlatanlar» listesinden başlayın: her düzeltmenin kazandırdığı süreye göre sıralıdır. Çoğu zaman ağır görseller, fazla JavaScript ve metni geciktiren yazı tipleridir.',
            'notes' => [
                'ok' => 'Telefonda performans: 100 üzerinden :score.',
                'average' => 'Telefonda performans: 100 üzerinden :score. Google sıralamada telefondaki hızı dikkate alır.',
                'poor' => 'Telefonda performans: 100 üzerinden :score. Telefondan gelen ziyaretçiler bekler ve ayrılır.',
                'none' => 'Lighthouse puan vermedi.',
            ],
        ],
        'P2' => [
            'title' => 'Sayfa bilgisayarda hızlı mı?',
            'text' => 'Masaüstünde Lighthouse performansı, 90+',
            'fix' => 'Düzeltmeler telefondakilerle aynı: bilgisayarda daha hızlı işlemci ve ağ sayesinde daha az fark edilirler.',
            'notes' => [
                'ok' => 'Bilgisayarda performans: 100 üzerinden :score.',
                'average' => 'Bilgisayarda performans: 100 üzerinden :score.',
                'poor' => 'Bilgisayarda performans: 100 üzerinden :score: sayfa hızlı bir bilgisayarda bile yavaş.',
                'none' => 'Lighthouse puan vermedi.',
            ],
        ],
        'V1' => [
            'title' => 'Ana içerik ne kadar hızlı görünüyor?',
            'text' => 'Largest Contentful Paint en fazla 2,5 sn',
            'fix' => 'İlk ekrandaki en büyük görseli veya metin bloğunu hızlandırın: görseli sıkıştırıp WebP ya da AVIF olarak sunun, öncelikli ve asla tembel olmayan şekilde yükleyin, sunucunun daha hızlı yanıt vermesini sağlayın.',
            'notes' => [
                'ok' => 'Ana içerik :value içinde görünüyor.',
                'average' => 'Ana içerik :value içinde görünüyor; iyi olan :good değerine kadar.',
                'poor' => 'Ana içerik ancak :value içinde görünüyor; iyi olan :good değerine kadar. Birçok ziyaretçi daha önce ayrılır.',
                'none' => 'LCP ölçümü yok.',
            ],
        ],
        'V2' => [
            'title' => 'Sayfa yüklenirken kayıyor mu?',
            'text' => 'Cumulative Layout Shift en fazla 0,1',
            'fix' => 'Her görsele, videoya ve reklam bloğuna genişlik ve yükseklik verin, metni hemen yedek yazı tipiyle gösterin ve sayfa yüklendikten sonra içeriğin üstüne afiş eklemeyin.',
            'notes' => [
                'ok' => 'Sayfa sabit: CLS :value.',
                'average' => 'Sayfa biraz kayıyor: CLS :value; iyi olan :good değerine kadar.',
                'poor' => 'Sayfa çok kayıyor: CLS :value; iyi olan :good değerine kadar. İnsanlar yanlış düğmelere dokunuyor.',
                'none' => 'CLS ölçümü yok.',
            ],
        ],
        'V3' => [
            'title' => 'Sayfa dokunuşlara hızlı tepki veriyor mu?',
            'text' => 'Interaction to Next Paint en fazla 200 ms',
            'fix' => 'Daha az ve daha geç JavaScript yükleyin: betikleri bölün, kullanılmayan kitaplıkları ve widget\'ları kaldırın, analitik ve sohbetleri sayfa yüklendikten sonraya erteleyin.',
            'notes' => [
                'ok' => 'Sayfa :value içinde tepki veriyor.',
                'average' => 'Sayfa :value içinde tepki veriyor; iyi olan :good değerine kadar.',
                'poor' => 'Sayfa ancak :value içinde tepki veriyor; iyi olan :good değerine kadar. Düğmeler bozuk gibi görünüyor.',
                'none' => 'Tepki süresi ölçümü yok.',
            ],
        ],
        'V4' => [
            'title' => 'Sunucu hızlı yanıt veriyor mu?',
            'text' => 'Sunucu yanıtı en fazla 0,8 sn',
            'fix' => 'Sunucuyu hızlandırın: sayfa ve veritabanı önbelleğini, sıkıştırmayı, daha yeni bir PHP\'yi açın; sunucu ziyaretçilerden uzaksa daha iyi bir hostinge veya CDN\'e geçin.',
            'notes' => [
                'ok' => 'Sunucu :value içinde yanıt veriyor.',
                'average' => 'Sunucu :value içinde yanıt veriyor; iyi olan :good değerine kadar.',
                'poor' => 'Sunucu ancak :value içinde yanıt veriyor; iyi olan :good değerine kadar. Diğer her şey onu bekliyor.',
                'none' => 'Sunucu yanıtı ölçümü yok.',
            ],
        ],
        'Q1' => [
            'title' => 'Arama motorları sayfayı okuyabiliyor mu?',
            'text' => 'Lighthouse SEO, 90+',
            'fix' => 'Sayfayı Chrome DevTools → Lighthouse → SEO ile açın: her madde orada, çoğu zaman eksik bir meta description, metinsiz bağlantılar veya çok küçük dokunma alanlarıdır.',
            'notes' => [
                'ok' => 'SEO: 100 üzerinden :score.',
                'average' => 'SEO: 100 üzerinden :score.',
                'poor' => 'SEO: 100 üzerinden :score: arama motorları sayfayı yanlış okuyabilir.',
                'none' => 'Lighthouse puan vermedi.',
            ],
        ],
        'Q2' => [
            'title' => 'Sayfayı herkes kullanabiliyor mu?',
            'text' => 'Lighthouse erişilebilirlik, 90+',
            'fix' => 'Çoğu zaman: kontrastı düşük metin, alt metni olmayan görseller, adı olmayan düğmeler ve alanlar. Chrome DevTools → Lighthouse → Accessibility her durumu gösterir.',
            'notes' => [
                'ok' => 'Erişilebilirlik: 100 üzerinden :score.',
                'average' => 'Erişilebilirlik: 100 üzerinden :score.',
                'poor' => 'Erişilebilirlik: 100 üzerinden :score: az gören veya ekran okuyucu kullanan kişiler zorlanır.',
                'none' => 'Lighthouse puan vermedi.',
            ],
        ],
        'Q3' => [
            'title' => 'Sayfa modern kurallara göre mi yapılmış?',
            'text' => 'Lighthouse en iyi uygulamalar, 90+',
            'fix' => 'Çoğu zaman: tarayıcı konsolunda hatalar, gösterildiğinden düşük çözünürlüklü görseller, bilinen açıkları olan eski kitaplıklar. Chrome DevTools → Lighthouse → Best practices her durumu gösterir.',
            'notes' => [
                'ok' => 'En iyi uygulamalar: 100 üzerinden :score.',
                'average' => 'En iyi uygulamalar: 100 üzerinden :score.',
                'poor' => 'En iyi uygulamalar: 100 üzerinden :score.',
                'none' => 'Lighthouse puan vermedi.',
            ],
        ],
    ],
];
