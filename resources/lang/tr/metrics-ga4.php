<?php

return [
    'navigation_group' => 'Ayarlar',
    'navigation_label' => 'Google Analytics',
    'title' => 'Google Analytics ayarları',
    'sections' => [
        'api_configuration' => 'API yapılandırması',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'Mülk kimliği',
            'helper' => 'Sayısal GA4 mülk kimliği; Google Analytics\'te Admin > Property details altında bulunur.',
        ],
        'service_account_json' => [
            'label' => 'Hizmet hesabı JSON anahtarı',
            'helper' => 'Mülke Görüntüleyen (Viewer) olarak eklenmiş bir Google Cloud hizmet hesabının tam JSON anahtarını yapıştırın. Şifrelenmiş olarak saklanır.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Şu anki ziyaretçiler',
            'visitors' => 'Tekil ziyaretçiler',
            'pageviews' => 'Sayfa görüntülemeleri',
            'bounce_rate' => 'Hemen çıkma oranı',
            'visit_duration' => 'Ziyaret süresi',
        ],
        'visitors_chart' => [
            'label' => 'Ziyaretçiler ve sayfa görüntülemeleri (son 30 gün)',
            'visitors' => 'Ziyaretçiler',
            'pageviews' => 'Sayfa görüntülemeleri',
        ],
        'top_pages' => [
            'label' => 'En popüler sayfalar',
            'page' => 'Sayfa',
        ],
        'top_sources' => [
            'label' => 'En önemli kaynaklar',
            'source' => 'Kaynak',
        ],
        'top_countries' => [
            'label' => 'En çok ülkeler',
            'country' => 'Ülke',
        ],
        'top_browsers' => [
            'label' => 'En popüler tarayıcılar',
        ],
        'top_devices' => [
            'label' => 'Cihazlar',
        ],
        'visitors' => 'Ziyaretçiler',
        'pageviews' => 'Sayfa görüntülemeleri',
        'bounce_rate' => 'Hemen çıkma oranı',
        'last_30_days' => 'Son 30 gün',
        'direct' => 'Doğrudan / Yok',
        'unknown' => 'Bilinmiyor',
        'not_configured' => 'Yapılandırılmadı',
        'not_configured_description' => 'Google Analytics mülk kimliğini ve hizmet hesabı anahtarını Ayarlar\'da yapılandırın.',
        'no_data' => 'Veri yok',
        'error' => 'Veriler yüklenirken hata oluştu',
    ],
];
