<?php

return [
    'navigation_group' => 'Настройки',
    'navigation_label' => 'Google Analytics',
    'title' => 'Настройки Google Analytics',
    'sections' => [
        'api_configuration' => 'Настройка API',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID ресурса',
            'helper' => 'Числовой ID ресурса GA4, указан в Google Analytics в разделе Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'JSON-ключ сервисного аккаунта',
            'helper' => 'Вставьте полный JSON-ключ сервисного аккаунта Google Cloud, добавленного в ресурс с ролью «Читатель» (Viewer). Хранится в зашифрованном виде.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Посетителей сейчас',
            'visitors' => 'Уникальные посетители',
            'pageviews' => 'Просмотры',
            'bounce_rate' => 'Показатель отказов',
            'visit_duration' => 'Длительность визита',
        ],
        'visitors_chart' => [
            'label' => 'Посетители и просмотры (последние 30 дней)',
            'visitors' => 'Посетители',
            'pageviews' => 'Просмотры',
        ],
        'top_pages' => [
            'label' => 'Популярные страницы',
            'page' => 'Страница',
        ],
        'top_sources' => [
            'label' => 'Основные источники',
            'source' => 'Источник',
        ],
        'top_countries' => [
            'label' => 'Основные страны',
            'country' => 'Страна',
        ],
        'top_browsers' => [
            'label' => 'Популярные браузеры',
        ],
        'top_devices' => [
            'label' => 'Устройства',
        ],
        'visitors' => 'Посетители',
        'pageviews' => 'Просмотры',
        'bounce_rate' => 'Показатель отказов',
        'last_30_days' => 'Последние 30 дней',
        'direct' => 'Прямой заход / Нет',
        'unknown' => 'Неизвестно',
        'not_configured' => 'Не настроено',
        'not_configured_description' => 'Укажите ID ресурса и ключ сервисного аккаунта Google Analytics в настройках.',
        'no_data' => 'Нет данных',
        'error' => 'Ошибка загрузки данных',
    ],
];
