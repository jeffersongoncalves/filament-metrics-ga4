<?php

return [
    'navigation_group' => 'सेटिंग्स',
    'navigation_label' => 'Google Analytics',
    'title' => 'Google Analytics सेटिंग्स',
    'sections' => [
        'api_configuration' => 'API कॉन्फ़िगरेशन',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'प्रॉपर्टी ID',
            'helper' => 'GA4 प्रॉपर्टी की संख्यात्मक ID, जो Google Analytics में Admin > Property details में मिलती है।',
        ],
        'service_account_json' => [
            'label' => 'सर्विस अकाउंट JSON कुंजी',
            'helper' => 'उस Google Cloud सर्विस अकाउंट की पूरी JSON कुंजी पेस्ट करें जिसे प्रॉपर्टी में Viewer के रूप में जोड़ा गया है। एन्क्रिप्टेड रूप में संग्रहीत।',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'अभी आगंतुक',
            'visitors' => 'अद्वितीय आगंतुक',
            'pageviews' => 'पेज व्यू',
            'bounce_rate' => 'बाउंस दर',
            'visit_duration' => 'विज़िट अवधि',
        ],
        'visitors_chart' => [
            'label' => 'आगंतुक और पेज व्यू (पिछले 30 दिन)',
            'visitors' => 'आगंतुक',
            'pageviews' => 'पेज व्यू',
        ],
        'top_pages' => [
            'label' => 'शीर्ष पेज',
            'page' => 'पेज',
        ],
        'top_sources' => [
            'label' => 'शीर्ष स्रोत',
            'source' => 'स्रोत',
        ],
        'top_countries' => [
            'label' => 'शीर्ष देश',
            'country' => 'देश',
        ],
        'top_browsers' => [
            'label' => 'शीर्ष ब्राउज़र',
        ],
        'top_devices' => [
            'label' => 'डिवाइस',
        ],
        'visitors' => 'आगंतुक',
        'pageviews' => 'पेज व्यू',
        'bounce_rate' => 'बाउंस दर',
        'last_30_days' => 'पिछले 30 दिन',
        'direct' => 'डायरेक्ट / कोई नहीं',
        'unknown' => 'अज्ञात',
        'not_configured' => 'कॉन्फ़िगर नहीं है',
        'not_configured_description' => 'सेटिंग्स में Google Analytics प्रॉपर्टी ID और सर्विस अकाउंट कुंजी कॉन्फ़िगर करें।',
        'no_data' => 'कोई डेटा उपलब्ध नहीं',
        'error' => 'डेटा लोड करने में त्रुटि',
    ],
];
