<?php

return [
    'navigation_group' => 'Paramètres',
    'navigation_label' => 'Google Analytics',
    'title' => 'Paramètres de Google Analytics',
    'sections' => [
        'api_configuration' => 'Configuration de l\'API',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID de la propriété',
            'helper' => 'ID numérique de la propriété GA4, disponible dans Google Analytics sous Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'Clé JSON du compte de service',
            'helper' => 'Collez la clé JSON complète d\'un compte de service Google Cloud ajouté comme Lecteur (Viewer) de la propriété. Stockée chiffrée.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visiteurs en ce moment',
            'visitors' => 'Visiteurs uniques',
            'pageviews' => 'Pages vues',
            'bounce_rate' => 'Taux de rebond',
            'visit_duration' => 'Durée de visite',
        ],
        'visitors_chart' => [
            'label' => 'Visiteurs et pages vues (30 derniers jours)',
            'visitors' => 'Visiteurs',
            'pageviews' => 'Pages vues',
        ],
        'top_pages' => [
            'label' => 'Pages principales',
            'page' => 'Page',
        ],
        'top_sources' => [
            'label' => 'Principales sources',
            'source' => 'Source',
        ],
        'top_countries' => [
            'label' => 'Principaux pays',
            'country' => 'Pays',
        ],
        'top_browsers' => [
            'label' => 'Principaux navigateurs',
        ],
        'top_devices' => [
            'label' => 'Appareils',
        ],
        'visitors' => 'Visiteurs',
        'pageviews' => 'Pages vues',
        'bounce_rate' => 'Taux de rebond',
        'last_30_days' => '30 derniers jours',
        'direct' => 'Direct / Aucun',
        'unknown' => 'Inconnu',
        'not_configured' => 'Non configuré',
        'not_configured_description' => 'Configurez l\'ID de la propriété et la clé du compte de service Google Analytics dans les Paramètres.',
        'no_data' => 'Aucune donnée disponible',
        'error' => 'Erreur lors du chargement des données',
    ],
];
