<?php

return [
    'navigation_group' => 'Impostazioni',
    'navigation_label' => 'Google Analytics',
    'title' => 'Impostazioni di Google Analytics',
    'sections' => [
        'api_configuration' => 'Configurazione API',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID della proprietà',
            'helper' => 'ID numerico della proprietà GA4, disponibile in Google Analytics in Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'Chiave JSON dell\'account di servizio',
            'helper' => 'Incolla la chiave JSON completa di un account di servizio Google Cloud aggiunto come Visualizzatore (Viewer) della proprietà. Memorizzata cifrata.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitatori in questo momento',
            'visitors' => 'Visitatori unici',
            'pageviews' => 'Visualizzazioni',
            'bounce_rate' => 'Frequenza di rimbalzo',
            'visit_duration' => 'Durata della visita',
        ],
        'visitors_chart' => [
            'label' => 'Visitatori e visualizzazioni (ultimi 30 giorni)',
            'visitors' => 'Visitatori',
            'pageviews' => 'Visualizzazioni',
        ],
        'top_pages' => [
            'label' => 'Pagine principali',
            'page' => 'Pagina',
        ],
        'top_sources' => [
            'label' => 'Sorgenti principali',
            'source' => 'Sorgente',
        ],
        'top_countries' => [
            'label' => 'Paesi principali',
            'country' => 'Paese',
        ],
        'top_browsers' => [
            'label' => 'Browser principali',
        ],
        'top_devices' => [
            'label' => 'Dispositivi',
        ],
        'visitors' => 'Visitatori',
        'pageviews' => 'Visualizzazioni',
        'bounce_rate' => 'Frequenza di rimbalzo',
        'last_30_days' => 'Ultimi 30 giorni',
        'direct' => 'Diretto / Nessuno',
        'unknown' => 'Sconosciuto',
        'not_configured' => 'Non configurato',
        'not_configured_description' => 'Configura l\'ID della proprietà e la chiave dell\'account di servizio di Google Analytics nelle Impostazioni.',
        'no_data' => 'Nessun dato disponibile',
        'error' => 'Errore durante il caricamento dei dati',
    ],
];
