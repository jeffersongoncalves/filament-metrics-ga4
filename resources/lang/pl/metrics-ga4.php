<?php

return [
    'navigation_group' => 'Ustawienia',
    'navigation_label' => 'Google Analytics',
    'title' => 'Ustawienia Google Analytics',
    'sections' => [
        'api_configuration' => 'Konfiguracja API',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID usługi',
            'helper' => 'Numeryczny identyfikator usługi GA4, dostępny w Google Analytics w Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'Klucz JSON konta usługi',
            'helper' => 'Wklej pełny klucz JSON konta usługi Google Cloud dodanego jako Wyświetlający (Viewer) usługi. Przechowywany w postaci zaszyfrowanej.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Odwiedzający teraz',
            'visitors' => 'Unikalni odwiedzający',
            'pageviews' => 'Odsłony',
            'bounce_rate' => 'Współczynnik odrzuceń',
            'visit_duration' => 'Czas wizyty',
        ],
        'visitors_chart' => [
            'label' => 'Odwiedzający i odsłony (ostatnie 30 dni)',
            'visitors' => 'Odwiedzający',
            'pageviews' => 'Odsłony',
        ],
        'top_pages' => [
            'label' => 'Najpopularniejsze strony',
            'page' => 'Strona',
        ],
        'top_sources' => [
            'label' => 'Główne źródła',
            'source' => 'Źródło',
        ],
        'top_countries' => [
            'label' => 'Najczęstsze kraje',
            'country' => 'Kraj',
        ],
        'top_browsers' => [
            'label' => 'Najpopularniejsze przeglądarki',
        ],
        'top_devices' => [
            'label' => 'Urządzenia',
        ],
        'visitors' => 'Odwiedzający',
        'pageviews' => 'Odsłony',
        'bounce_rate' => 'Współczynnik odrzuceń',
        'last_30_days' => 'Ostatnie 30 dni',
        'direct' => 'Bezpośrednio / Brak',
        'unknown' => 'Nieznane',
        'not_configured' => 'Nieskonfigurowane',
        'not_configured_description' => 'Skonfiguruj ID usługi i klucz konta usługi Google Analytics w Ustawieniach.',
        'no_data' => 'Brak danych',
        'error' => 'Błąd podczas ładowania danych',
    ],
];
