<?php

return [
    'navigation_group' => 'Parametrlər',
    'navigation_label' => 'Google Analytics',
    'title' => 'Google Analytics parametrləri',
    'sections' => [
        'api_configuration' => 'API konfiqurasiyası',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Resurs ID',
            'helper' => 'Rəqəmsal GA4 resurs ID-si; Google Analytics-də Admin > Property details bölməsində tapılır.',
        ],
        'service_account_json' => [
            'label' => 'Xidmət hesabının JSON açarı',
            'helper' => 'Resursa Baxıcı (Viewer) kimi əlavə edilmiş Google Cloud xidmət hesabının tam JSON açarını yapışdırın. Şifrələnmiş şəkildə saxlanılır.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Hazırda ziyarətçilər',
            'visitors' => 'Unikal ziyarətçilər',
            'pageviews' => 'Səhifə baxışları',
            'bounce_rate' => 'İmtina dərəcəsi',
            'visit_duration' => 'Ziyarət müddəti',
        ],
        'visitors_chart' => [
            'label' => 'Ziyarətçilər və səhifə baxışları (son 30 gün)',
            'visitors' => 'Ziyarətçilər',
            'pageviews' => 'Səhifə baxışları',
        ],
        'top_pages' => [
            'label' => 'Ən populyar səhifələr',
            'page' => 'Səhifə',
        ],
        'top_sources' => [
            'label' => 'Əsas mənbələr',
            'source' => 'Mənbə',
        ],
        'top_countries' => [
            'label' => 'Ən çox ölkələr',
            'country' => 'Ölkə',
        ],
        'top_browsers' => [
            'label' => 'Ən populyar brauzerlər',
        ],
        'top_devices' => [
            'label' => 'Cihazlar',
        ],
        'visitors' => 'Ziyarətçilər',
        'pageviews' => 'Səhifə baxışları',
        'bounce_rate' => 'İmtina dərəcəsi',
        'last_30_days' => 'Son 30 gün',
        'direct' => 'Birbaşa / Yoxdur',
        'unknown' => 'Naməlum',
        'not_configured' => 'Konfiqurasiya edilməyib',
        'not_configured_description' => 'Google Analytics resurs ID-sini və xidmət hesabı açarını Parametrlərdə konfiqurasiya edin.',
        'no_data' => 'Məlumat yoxdur',
        'error' => 'Məlumat yüklənərkən xəta',
    ],
];
