<?php

return [
    'navigation_group' => 'Instellingen',
    'navigation_label' => 'Google Analytics',
    'title' => 'Google Analytics-instellingen',
    'sections' => [
        'api_configuration' => 'API-configuratie',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Property-ID',
            'helper' => 'Numerieke GA4-property-ID, te vinden in Google Analytics onder Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'JSON-sleutel van serviceaccount',
            'helper' => 'Plak de volledige JSON-sleutel van een Google Cloud-serviceaccount dat als Kijker (Viewer) aan de property is toegevoegd. Wordt versleuteld opgeslagen.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Bezoekers op dit moment',
            'visitors' => 'Unieke bezoekers',
            'pageviews' => 'Paginaweergaven',
            'bounce_rate' => 'Bouncepercentage',
            'visit_duration' => 'Bezoekduur',
        ],
        'visitors_chart' => [
            'label' => 'Bezoekers en paginaweergaven (laatste 30 dagen)',
            'visitors' => 'Bezoekers',
            'pageviews' => 'Paginaweergaven',
        ],
        'top_pages' => [
            'label' => 'Toppagina\'s',
            'page' => 'Pagina',
        ],
        'top_sources' => [
            'label' => 'Topbronnen',
            'source' => 'Bron',
        ],
        'top_countries' => [
            'label' => 'Toplanden',
            'country' => 'Land',
        ],
        'top_browsers' => [
            'label' => 'Topbrowsers',
        ],
        'top_devices' => [
            'label' => 'Apparaten',
        ],
        'visitors' => 'Bezoekers',
        'pageviews' => 'Paginaweergaven',
        'bounce_rate' => 'Bouncepercentage',
        'last_30_days' => 'Laatste 30 dagen',
        'direct' => 'Direct / Geen',
        'unknown' => 'Onbekend',
        'not_configured' => 'Niet geconfigureerd',
        'not_configured_description' => 'Configureer de Google Analytics-property-ID en serviceaccountsleutel in Instellingen.',
        'no_data' => 'Geen gegevens beschikbaar',
        'error' => 'Fout bij het laden van gegevens',
    ],
];
