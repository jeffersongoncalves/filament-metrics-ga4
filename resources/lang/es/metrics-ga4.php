<?php

return [
    'navigation_group' => 'Configuración',
    'navigation_label' => 'Google Analytics',
    'title' => 'Configuración de Google Analytics',
    'sections' => [
        'api_configuration' => 'Configuración de la API',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID de la propiedad',
            'helper' => 'ID numérico de la propiedad de GA4, disponible en Google Analytics en Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'Clave JSON de la cuenta de servicio',
            'helper' => 'Pega la clave JSON completa de una cuenta de servicio de Google Cloud añadida como Lector (Viewer) de la propiedad. Se almacena cifrada.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitantes ahora mismo',
            'visitors' => 'Visitantes únicos',
            'pageviews' => 'Páginas vistas',
            'bounce_rate' => 'Tasa de rebote',
            'visit_duration' => 'Duración de la visita',
        ],
        'visitors_chart' => [
            'label' => 'Visitantes y páginas vistas (últimos 30 días)',
            'visitors' => 'Visitantes',
            'pageviews' => 'Páginas vistas',
        ],
        'top_pages' => [
            'label' => 'Páginas principales',
            'page' => 'Página',
        ],
        'top_sources' => [
            'label' => 'Principales fuentes',
            'source' => 'Fuente',
        ],
        'top_countries' => [
            'label' => 'Principales países',
            'country' => 'País',
        ],
        'top_browsers' => [
            'label' => 'Principales navegadores',
        ],
        'top_devices' => [
            'label' => 'Dispositivos',
        ],
        'visitors' => 'Visitantes',
        'pageviews' => 'Páginas vistas',
        'bounce_rate' => 'Tasa de rebote',
        'last_30_days' => 'Últimos 30 días',
        'direct' => 'Directo / Ninguno',
        'unknown' => 'Desconocido',
        'not_configured' => 'No configurado',
        'not_configured_description' => 'Configura el ID de la propiedad y la clave de la cuenta de servicio de Google Analytics en Configuración.',
        'no_data' => 'No hay datos disponibles',
        'error' => 'Error al cargar los datos',
    ],
];
