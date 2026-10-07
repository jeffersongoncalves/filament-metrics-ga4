<?php

return [
    'navigation_group' => 'Settings',
    'navigation_label' => 'Google Analytics',
    'title' => 'Google Analytics Settings',

    'sections' => [
        'api_configuration' => 'API Configuration',
    ],

    'fields' => [
        'property_id' => [
            'label' => 'Property ID',
            'helper' => 'Numeric GA4 property ID, found in Google Analytics under Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'Service account JSON key',
            'helper' => 'Paste the full JSON key of a Google Cloud service account added as a Viewer of the property. Stored encrypted.',
        ],
    ],

    'widgets' => [
        'realtime' => [
            'current' => 'Visitors right now',
            'visitors' => 'Unique Visitors',
            'pageviews' => 'Pageviews',
            'bounce_rate' => 'Bounce Rate',
            'visit_duration' => 'Visit Duration',
        ],
        'visitors_chart' => [
            'label' => 'Visitors & Pageviews (Last 30 Days)',
            'visitors' => 'Visitors',
            'pageviews' => 'Pageviews',
        ],
        'top_pages' => [
            'label' => 'Top Pages',
            'page' => 'Page',
        ],
        'top_sources' => [
            'label' => 'Top Sources',
            'source' => 'Source',
        ],
        'top_countries' => [
            'label' => 'Top Countries',
            'country' => 'Country',
        ],
        'top_browsers' => [
            'label' => 'Top Browsers',
        ],
        'top_devices' => [
            'label' => 'Devices',
        ],
        'visitors' => 'Visitors',
        'pageviews' => 'Pageviews',
        'bounce_rate' => 'Bounce Rate',
        'last_30_days' => 'Last 30 days',
        'direct' => 'Direct / None',
        'unknown' => 'Unknown',
        'not_configured' => 'Not Configured',
        'not_configured_description' => 'Configure the Google Analytics property ID and service account key in Settings.',
        'no_data' => 'No data available',
        'error' => 'Error loading data',
    ],
];
