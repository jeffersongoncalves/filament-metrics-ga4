<?php

return [
    'navigation_group' => 'Налаштування',
    'navigation_label' => 'Google Analytics',
    'title' => 'Налаштування Google Analytics',
    'sections' => [
        'api_configuration' => 'Налаштування API',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID ресурсу',
            'helper' => 'Числовий ID ресурсу GA4, вказаний у Google Analytics у розділі Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'JSON-ключ сервісного акаунта',
            'helper' => 'Вставте повний JSON-ключ сервісного акаунта Google Cloud, доданого до ресурсу з роллю «Глядач» (Viewer). Зберігається в зашифрованому вигляді.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Відвідувачів зараз',
            'visitors' => 'Унікальні відвідувачі',
            'pageviews' => 'Перегляди',
            'bounce_rate' => 'Показник відмов',
            'visit_duration' => 'Тривалість візиту',
        ],
        'visitors_chart' => [
            'label' => 'Відвідувачі та перегляди (останні 30 днів)',
            'visitors' => 'Відвідувачі',
            'pageviews' => 'Перегляди',
        ],
        'top_pages' => [
            'label' => 'Популярні сторінки',
            'page' => 'Сторінка',
        ],
        'top_sources' => [
            'label' => 'Основні джерела',
            'source' => 'Джерело',
        ],
        'top_countries' => [
            'label' => 'Основні країни',
            'country' => 'Країна',
        ],
        'top_browsers' => [
            'label' => 'Популярні браузери',
        ],
        'top_devices' => [
            'label' => 'Пристрої',
        ],
        'visitors' => 'Відвідувачі',
        'pageviews' => 'Перегляди',
        'bounce_rate' => 'Показник відмов',
        'last_30_days' => 'Останні 30 днів',
        'direct' => 'Прямий захід / Немає',
        'unknown' => 'Невідомо',
        'not_configured' => 'Не налаштовано',
        'not_configured_description' => 'Вкажіть ID ресурсу та ключ сервісного акаунта Google Analytics у налаштуваннях.',
        'no_data' => 'Немає даних',
        'error' => 'Помилка завантаження даних',
    ],
];
