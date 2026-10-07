<?php

return [
    'navigation_group' => '设置',
    'navigation_label' => 'Google Analytics',
    'title' => 'Google Analytics 设置',
    'sections' => [
        'api_configuration' => 'API 配置',
    ],
    'fields' => [
        'property_id' => [
            'label' => '媒体资源 ID',
            'helper' => 'GA4 媒体资源的数字 ID，可在 Google Analytics 的 Admin > Property details 中找到。',
        ],
        'service_account_json' => [
            'label' => '服务账号 JSON 密钥',
            'helper' => '粘贴已作为查看者（Viewer）添加到该媒体资源的 Google Cloud 服务账号的完整 JSON 密钥。加密存储。',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => '当前在线访客',
            'visitors' => '独立访客',
            'pageviews' => '页面浏览量',
            'bounce_rate' => '跳出率',
            'visit_duration' => '访问时长',
        ],
        'visitors_chart' => [
            'label' => '访客与页面浏览量（最近 30 天）',
            'visitors' => '访客',
            'pageviews' => '页面浏览量',
        ],
        'top_pages' => [
            'label' => '热门页面',
            'page' => '页面',
        ],
        'top_sources' => [
            'label' => '主要来源',
            'source' => '来源',
        ],
        'top_countries' => [
            'label' => '主要国家/地区',
            'country' => '国家/地区',
        ],
        'top_browsers' => [
            'label' => '主要浏览器',
        ],
        'top_devices' => [
            'label' => '设备',
        ],
        'visitors' => '访客',
        'pageviews' => '页面浏览量',
        'bounce_rate' => '跳出率',
        'last_30_days' => '最近 30 天',
        'direct' => '直接访问 / 无',
        'unknown' => '未知',
        'not_configured' => '未配置',
        'not_configured_description' => '请在设置中配置 Google Analytics 媒体资源 ID 和服务账号密钥。',
        'no_data' => '暂无数据',
        'error' => '加载数据时出错',
    ],
];
