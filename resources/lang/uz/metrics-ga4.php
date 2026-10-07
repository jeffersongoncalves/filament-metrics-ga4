<?php

return [
    'navigation_group' => 'Sozlamalar',
    'navigation_label' => 'Google Analytics',
    'title' => 'Google Analytics sozlamalari',
    'sections' => [
        'api_configuration' => 'API konfiguratsiyasi',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Resurs ID',
            'helper' => 'GA4 resursining raqamli IDʼsi, Google Analyticsʼda Admin > Property details boʻlimida joylashgan.',
        ],
        'service_account_json' => [
            'label' => 'Xizmat hisobining JSON kaliti',
            'helper' => 'Resursga Kuzatuvchi (Viewer) sifatida qoʻshilgan Google Cloud xizmat hisobining toʻliq JSON kalitini joylang. Shifrlangan holda saqlanadi.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Hozirgi tashrif buyuruvchilar',
            'visitors' => 'Noyob tashrif buyuruvchilar',
            'pageviews' => 'Sahifa koʻrishlari',
            'bounce_rate' => 'Rad etish darajasi',
            'visit_duration' => 'Tashrif davomiyligi',
        ],
        'visitors_chart' => [
            'label' => 'Tashrif buyuruvchilar va sahifa koʻrishlari (oxirgi 30 kun)',
            'visitors' => 'Tashrif buyuruvchilar',
            'pageviews' => 'Sahifa koʻrishlari',
        ],
        'top_pages' => [
            'label' => 'Eng mashhur sahifalar',
            'page' => 'Sahifa',
        ],
        'top_sources' => [
            'label' => 'Asosiy manbalar',
            'source' => 'Manba',
        ],
        'top_countries' => [
            'label' => 'Asosiy mamlakatlar',
            'country' => 'Mamlakat',
        ],
        'top_browsers' => [
            'label' => 'Eng mashhur brauzerlar',
        ],
        'top_devices' => [
            'label' => 'Qurilmalar',
        ],
        'visitors' => 'Tashrif buyuruvchilar',
        'pageviews' => 'Sahifa koʻrishlari',
        'bounce_rate' => 'Rad etish darajasi',
        'last_30_days' => 'Oxirgi 30 kun',
        'direct' => 'Toʻgʻridan-toʻgʻri / Yoʻq',
        'unknown' => 'Nomaʼlum',
        'not_configured' => 'Sozlanmagan',
        'not_configured_description' => 'Google Analytics resurs IDʼsi va xizmat hisobi kalitini Sozlamalarda sozlang.',
        'no_data' => 'Maʼlumot yoʻq',
        'error' => 'Maʼlumotlarni yuklashda xato',
    ],
];
