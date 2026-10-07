<?php

return [
    'navigation_group' => 'تنظیمات',
    'navigation_label' => 'Google Analytics',
    'title' => 'تنظیمات Google Analytics',
    'sections' => [
        'api_configuration' => 'پیکربندی API',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'شناسه پراپرتی',
            'helper' => 'شناسه عددی پراپرتی GA4 که در Google Analytics در بخش Admin > Property details قرار دارد.',
        ],
        'service_account_json' => [
            'label' => 'کلید JSON حساب سرویس',
            'helper' => 'کلید JSON کامل یک حساب سرویس Google Cloud را که با نقش بیننده (Viewer) به پراپرتی اضافه شده است وارد کنید. به‌صورت رمزنگاری‌شده ذخیره می‌شود.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'بازدیدکنندگان در همین لحظه',
            'visitors' => 'بازدیدکنندگان یکتا',
            'pageviews' => 'بازدید صفحات',
            'bounce_rate' => 'نرخ پرش',
            'visit_duration' => 'مدت بازدید',
        ],
        'visitors_chart' => [
            'label' => 'بازدیدکنندگان و بازدید صفحات (۳۰ روز اخیر)',
            'visitors' => 'بازدیدکنندگان',
            'pageviews' => 'بازدید صفحات',
        ],
        'top_pages' => [
            'label' => 'صفحات برتر',
            'page' => 'صفحه',
        ],
        'top_sources' => [
            'label' => 'منابع برتر',
            'source' => 'منبع',
        ],
        'top_countries' => [
            'label' => 'کشورهای برتر',
            'country' => 'کشور',
        ],
        'top_browsers' => [
            'label' => 'مرورگرهای برتر',
        ],
        'top_devices' => [
            'label' => 'دستگاه‌ها',
        ],
        'visitors' => 'بازدیدکنندگان',
        'pageviews' => 'بازدید صفحات',
        'bounce_rate' => 'نرخ پرش',
        'last_30_days' => '۳۰ روز اخیر',
        'direct' => 'مستقیم / هیچ',
        'unknown' => 'نامشخص',
        'not_configured' => 'پیکربندی نشده',
        'not_configured_description' => 'شناسه پراپرتی و کلید حساب سرویس Google Analytics را در تنظیمات پیکربندی کنید.',
        'no_data' => 'داده‌ای موجود نیست',
        'error' => 'خطا در بارگذاری داده‌ها',
    ],
];
