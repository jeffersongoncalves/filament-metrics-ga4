<?php

return [
    'navigation_group' => 'الإعدادات',
    'navigation_label' => 'Google Analytics',
    'title' => 'إعدادات Google Analytics',
    'sections' => [
        'api_configuration' => 'إعدادات API',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'معرّف المورد',
            'helper' => 'المعرّف الرقمي لمورد GA4، ويمكن إيجاده في Google Analytics ضمن Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'مفتاح JSON لحساب الخدمة',
            'helper' => 'الصق مفتاح JSON الكامل لحساب خدمة Google Cloud تمت إضافته بصلاحية مُشاهد (Viewer) على المورد. يُخزَّن مشفرًا.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'الزوار الآن',
            'visitors' => 'الزوار الفريدون',
            'pageviews' => 'مشاهدات الصفحات',
            'bounce_rate' => 'معدل الارتداد',
            'visit_duration' => 'مدة الزيارة',
        ],
        'visitors_chart' => [
            'label' => 'الزوار ومشاهدات الصفحات (آخر 30 يومًا)',
            'visitors' => 'الزوار',
            'pageviews' => 'مشاهدات الصفحات',
        ],
        'top_pages' => [
            'label' => 'أهم الصفحات',
            'page' => 'الصفحة',
        ],
        'top_sources' => [
            'label' => 'أهم المصادر',
            'source' => 'المصدر',
        ],
        'top_countries' => [
            'label' => 'أهم الدول',
            'country' => 'الدولة',
        ],
        'top_browsers' => [
            'label' => 'أهم المتصفحات',
        ],
        'top_devices' => [
            'label' => 'الأجهزة',
        ],
        'visitors' => 'الزوار',
        'pageviews' => 'مشاهدات الصفحات',
        'bounce_rate' => 'معدل الارتداد',
        'last_30_days' => 'آخر 30 يومًا',
        'direct' => 'مباشر / لا شيء',
        'unknown' => 'غير معروف',
        'not_configured' => 'غير مُعد',
        'not_configured_description' => 'اضبط معرّف المورد ومفتاح حساب الخدمة الخاصين بـ Google Analytics في الإعدادات.',
        'no_data' => 'لا توجد بيانات',
        'error' => 'خطأ في تحميل البيانات',
    ],
];
