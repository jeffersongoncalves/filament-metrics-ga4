<?php

return [
    'navigation_group' => '設定',
    'navigation_label' => 'Google Analytics',
    'title' => 'Google Analytics 設定',
    'sections' => [
        'api_configuration' => 'API 設定',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'プロパティ ID',
            'helper' => 'GA4 プロパティの数値 ID。Google Analytics の Admin > Property details で確認できます。',
        ],
        'service_account_json' => [
            'label' => 'サービスアカウントの JSON キー',
            'helper' => 'プロパティに閲覧者（Viewer）として追加した Google Cloud サービスアカウントの JSON キー全体を貼り付けてください。暗号化して保存されます。',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => '現在の訪問者',
            'visitors' => 'ユニーク訪問者',
            'pageviews' => 'ページビュー',
            'bounce_rate' => '直帰率',
            'visit_duration' => '滞在時間',
        ],
        'visitors_chart' => [
            'label' => '訪問者とページビュー（過去 30 日間）',
            'visitors' => '訪問者',
            'pageviews' => 'ページビュー',
        ],
        'top_pages' => [
            'label' => '人気ページ',
            'page' => 'ページ',
        ],
        'top_sources' => [
            'label' => '主な流入元',
            'source' => '流入元',
        ],
        'top_countries' => [
            'label' => '上位の国',
            'country' => '国',
        ],
        'top_browsers' => [
            'label' => '主なブラウザ',
        ],
        'top_devices' => [
            'label' => 'デバイス',
        ],
        'visitors' => '訪問者',
        'pageviews' => 'ページビュー',
        'bounce_rate' => '直帰率',
        'last_30_days' => '過去 30 日間',
        'direct' => '直接 / なし',
        'unknown' => '不明',
        'not_configured' => '未設定',
        'not_configured_description' => '設定で Google Analytics のプロパティ ID とサービスアカウントキーを設定してください。',
        'no_data' => 'データがありません',
        'error' => 'データの読み込み中にエラーが発生しました',
    ],
];
