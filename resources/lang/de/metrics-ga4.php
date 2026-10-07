<?php

return [
    'navigation_group' => 'Einstellungen',
    'navigation_label' => 'Google Analytics',
    'title' => 'Google Analytics-Einstellungen',
    'sections' => [
        'api_configuration' => 'API-Konfiguration',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Property-ID',
            'helper' => 'Numerische GA4-Property-ID, zu finden in Google Analytics unter Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'JSON-Schlüssel des Dienstkontos',
            'helper' => 'Fügen Sie den vollständigen JSON-Schlüssel eines Google-Cloud-Dienstkontos ein, das als Betrachter (Viewer) der Property hinzugefügt wurde. Wird verschlüsselt gespeichert.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Besucher gerade online',
            'visitors' => 'Eindeutige Besucher',
            'pageviews' => 'Seitenaufrufe',
            'bounce_rate' => 'Absprungrate',
            'visit_duration' => 'Besuchsdauer',
        ],
        'visitors_chart' => [
            'label' => 'Besucher & Seitenaufrufe (letzte 30 Tage)',
            'visitors' => 'Besucher',
            'pageviews' => 'Seitenaufrufe',
        ],
        'top_pages' => [
            'label' => 'Top-Seiten',
            'page' => 'Seite',
        ],
        'top_sources' => [
            'label' => 'Top-Quellen',
            'source' => 'Quelle',
        ],
        'top_countries' => [
            'label' => 'Top-Länder',
            'country' => 'Land',
        ],
        'top_browsers' => [
            'label' => 'Top-Browser',
        ],
        'top_devices' => [
            'label' => 'Geräte',
        ],
        'visitors' => 'Besucher',
        'pageviews' => 'Seitenaufrufe',
        'bounce_rate' => 'Absprungrate',
        'last_30_days' => 'Letzte 30 Tage',
        'direct' => 'Direkt / Keine',
        'unknown' => 'Unbekannt',
        'not_configured' => 'Nicht konfiguriert',
        'not_configured_description' => 'Konfigurieren Sie die Google-Analytics-Property-ID und den Dienstkonto-Schlüssel in den Einstellungen.',
        'no_data' => 'Keine Daten verfügbar',
        'error' => 'Fehler beim Laden der Daten',
    ],
];
