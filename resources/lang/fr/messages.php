<?php

declare(strict_types=1);

return [
    'form' => [
        'label' => 'Adresse de la page',
        'button' => 'Vérifier',
        'hint' => 'Gratuit · sans inscription · jusqu\'à :count vérifications par heure · jusqu\'à une minute',
    ],
    'loading' => [
        'mobile' => 'Google charge la page sur un téléphone',
        'desktop' => 'Google charge la page sur un ordinateur',
        'checks' => 'Lecture des Core Web Vitals et des problèmes',
    ],
    'errors' => [
        'quota' => 'Le service de vitesse a épuisé sa limite Google pour aujourd\'hui. Réessayez demain',
        'unreachable' => 'Google n\'a pas pu ouvrir la page. Vérifiez l\'adresse et que le site fonctionne',
        'timeout' => 'Google n\'a pas terminé la vérification à temps. Réessayez',
    ],
    'verdicts' => [
        'ready' => 'La page est rapide',
        'almost' => 'La page est presque rapide',
        'partly' => 'La page est lente par endroits',
        'not_ready' => 'La page est lente',
    ],
    'scores' => [
        'title' => 'Scores Lighthouse',
        'mobile' => 'Téléphone',
        'desktop' => 'Ordinateur',
        'field_page' => 'Les Core Web Vitals ci-dessous viennent de vrais visiteurs Chrome de cette page sur les 28 derniers jours.',
        'field_origin' => 'Cette page a trop peu de visites propres : les Core Web Vitals ci-dessous viennent de vrais visiteurs de tout le site sur 28 jours.',
        'lab_only' => 'Google n\'a pas encore de données de vrais visiteurs pour ce site : les Core Web Vitals ci-dessous viennent du test en laboratoire.',
    ],
    'categories' => [
        'performance' => 'Performances',
        'accessibility' => 'Accessibilité',
        'best-practices' => 'Bonnes pratiques',
        'seo' => 'SEO',
    ],
    'issues' => [
        'title' => 'Ce qui ralentit le plus la page',
        'note' => 'D\'après le test Google Lighthouse sur téléphone, la plus grande économie d\'abord.',
        'saves_time' => '−:value s',
        'saves_bytes' => '−:value Ko',
    ],
    'groups' => [
        'P' => ['title' => 'Performances', 'text' => 'Les scores de performances Lighthouse sur téléphone et sur ordinateur'],
        'V' => ['title' => 'Core Web Vitals', 'text' => 'Les mesures de vitesse que Google utilise dans la recherche, sur téléphone'],
        'Q' => ['title' => 'SEO, accessibilité, bonnes pratiques', 'text' => 'Les autres scores Lighthouse du test sur téléphone'],
    ],
    'checks' => [
        'P1' => [
            'title' => 'La page est-elle rapide sur téléphone ?',
            'text' => 'Performances Lighthouse sur mobile, 90+',
            'fix' => 'Commencez par la liste « Ce qui ralentit le plus la page » sous le rapport : elle est triée selon le temps que fait gagner chaque correction. Le plus souvent : des images lourdes, trop de JavaScript et des polices qui retardent le texte.',
            'notes' => [
                'ok' => 'Performances sur téléphone : :score sur 100.',
                'average' => 'Performances sur téléphone : :score sur 100. Google tient compte de la vitesse sur téléphone pour le classement.',
                'poor' => 'Performances sur téléphone : :score sur 100. Les visiteurs sur téléphone attendent et partent.',
                'none' => 'Lighthouse n\'a pas donné de score.',
            ],
        ],
        'P2' => [
            'title' => 'La page est-elle rapide sur ordinateur ?',
            'text' => 'Performances Lighthouse sur ordinateur, 90+',
            'fix' => 'Les corrections sont les mêmes que pour le téléphone : sur ordinateur elles comptent moins grâce à un processeur et un réseau plus rapides.',
            'notes' => [
                'ok' => 'Performances sur ordinateur : :score sur 100.',
                'average' => 'Performances sur ordinateur : :score sur 100.',
                'poor' => 'Performances sur ordinateur : :score sur 100 : la page est lente même sur un ordinateur rapide.',
                'none' => 'Lighthouse n\'a pas donné de score.',
            ],
        ],
        'V1' => [
            'title' => 'Le contenu principal s\'affiche-t-il vite ?',
            'text' => 'Largest Contentful Paint jusqu\'à 2,5 s',
            'fix' => 'Accélérez la plus grande image ou le plus grand bloc de texte du premier écran : compressez l\'image et servez-la en WebP ou AVIF, chargez-la en priorité et jamais en différé, et faites répondre le serveur plus vite.',
            'notes' => [
                'ok' => 'Le contenu principal s\'affiche en :value.',
                'average' => 'Le contenu principal s\'affiche en :value ; bon jusqu\'à :good.',
                'poor' => 'Le contenu principal ne s\'affiche qu\'en :value ; bon jusqu\'à :good. Beaucoup de visiteurs partent avant.',
                'none' => 'Il n\'y a pas de mesure du LCP.',
            ],
        ],
        'V2' => [
            'title' => 'La page saute-t-elle pendant le chargement ?',
            'text' => 'Cumulative Layout Shift jusqu\'à 0,1',
            'fix' => 'Donnez à chaque image, vidéo et bloc publicitaire sa largeur et sa hauteur, affichez le texte tout de suite dans une police de secours et n\'insérez pas de bannières au-dessus du contenu après le chargement.',
            'notes' => [
                'ok' => 'La page est stable : CLS :value.',
                'average' => 'La page saute un peu : CLS :value ; bon jusqu\'à :good.',
                'poor' => 'La page saute beaucoup : CLS :value ; bon jusqu\'à :good. Les visiteurs touchent les mauvais boutons.',
                'none' => 'Il n\'y a pas de mesure du CLS.',
            ],
        ],
        'V3' => [
            'title' => 'La page réagit-elle vite aux touchers ?',
            'text' => 'Interaction to Next Paint jusqu\'à 200 ms',
            'fix' => 'Chargez moins de JavaScript et plus tard : découpez les scripts, retirez les bibliothèques et widgets inutilisés, différez l\'analytique et les chats après le chargement de la page.',
            'notes' => [
                'ok' => 'La page réagit en :value.',
                'average' => 'La page réagit en :value ; bon jusqu\'à :good.',
                'poor' => 'La page ne réagit qu\'en :value ; bon jusqu\'à :good. Les boutons semblent cassés.',
                'none' => 'Il n\'y a pas de mesure du temps de réaction.',
            ],
        ],
        'V4' => [
            'title' => 'Le serveur répond-il vite ?',
            'text' => 'Réponse du serveur jusqu\'à 0,8 s',
            'fix' => 'Accélérez le serveur : activez le cache des pages et de la base de données, la compression, un PHP plus récent, et passez à un meilleur hébergement ou un CDN si le serveur est loin des visiteurs.',
            'notes' => [
                'ok' => 'Le serveur répond en :value.',
                'average' => 'Le serveur répond en :value ; bon jusqu\'à :good.',
                'poor' => 'Le serveur ne répond qu\'en :value ; bon jusqu\'à :good. Tout le reste l\'attend.',
                'none' => 'Il n\'y a pas de mesure de la réponse du serveur.',
            ],
        ],
        'Q1' => [
            'title' => 'Les moteurs de recherche peuvent-ils lire la page ?',
            'text' => 'SEO Lighthouse, 90+',
            'fix' => 'Ouvrez la page dans Chrome DevTools → Lighthouse → SEO : chaque point y figure, le plus souvent une meta description manquante, des liens sans texte ou des zones à toucher trop petites.',
            'notes' => [
                'ok' => 'SEO : :score sur 100.',
                'average' => 'SEO : :score sur 100.',
                'poor' => 'SEO : :score sur 100 : les moteurs de recherche risquent de mal lire la page.',
                'none' => 'Lighthouse n\'a pas donné de score.',
            ],
        ],
        'Q2' => [
            'title' => 'Tout le monde peut-il utiliser la page ?',
            'text' => 'Accessibilité Lighthouse, 90+',
            'fix' => 'Le plus souvent : du texte trop peu contrasté, des images sans texte alternatif, des boutons et champs sans nom. Chrome DevTools → Lighthouse → Accessibility liste chaque cas.',
            'notes' => [
                'ok' => 'Accessibilité : :score sur 100.',
                'average' => 'Accessibilité : :score sur 100.',
                'poor' => 'Accessibilité : :score sur 100 : les personnes malvoyantes ou utilisant un lecteur d\'écran auront du mal.',
                'none' => 'Lighthouse n\'a pas donné de score.',
            ],
        ],
        'Q3' => [
            'title' => 'La page suit-elle les règles modernes ?',
            'text' => 'Bonnes pratiques Lighthouse, 90+',
            'fix' => 'Le plus souvent : des erreurs dans la console du navigateur, des images dans une résolution plus basse que l\'affichage, des bibliothèques obsolètes aux failles connues. Chrome DevTools → Lighthouse → Best practices liste chaque cas.',
            'notes' => [
                'ok' => 'Bonnes pratiques : :score sur 100.',
                'average' => 'Bonnes pratiques : :score sur 100.',
                'poor' => 'Bonnes pratiques : :score sur 100.',
                'none' => 'Lighthouse n\'a pas donné de score.',
            ],
        ],
    ],
];
