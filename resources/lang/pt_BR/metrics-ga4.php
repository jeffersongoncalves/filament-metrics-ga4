<?php

return [
    'navigation_group' => 'Configurações',
    'navigation_label' => 'Google Analytics',
    'title' => 'Configurações do Google Analytics',
    'sections' => [
        'api_configuration' => 'Configuração da API',
    ],
    'fields' => [
        'property_id' => [
            'label' => 'ID da propriedade',
            'helper' => 'ID numérico da propriedade do GA4, disponível no Google Analytics em Admin > Property details.',
        ],
        'service_account_json' => [
            'label' => 'Chave JSON da conta de serviço',
            'helper' => 'Cole a chave JSON completa de uma conta de serviço do Google Cloud adicionada como Leitor (Viewer) da propriedade. Armazenada criptografada.',
        ],
    ],
    'widgets' => [
        'realtime' => [
            'current' => 'Visitantes agora',
            'visitors' => 'Visitantes únicos',
            'pageviews' => 'Visualizações de página',
            'bounce_rate' => 'Taxa de rejeição',
            'visit_duration' => 'Duração da visita',
        ],
        'visitors_chart' => [
            'label' => 'Visitantes e visualizações (últimos 30 dias)',
            'visitors' => 'Visitantes',
            'pageviews' => 'Visualizações',
        ],
        'top_pages' => [
            'label' => 'Páginas mais acessadas',
            'page' => 'Página',
        ],
        'top_sources' => [
            'label' => 'Principais origens',
            'source' => 'Origem',
        ],
        'top_countries' => [
            'label' => 'Principais países',
            'country' => 'País',
        ],
        'top_browsers' => [
            'label' => 'Principais navegadores',
        ],
        'top_devices' => [
            'label' => 'Dispositivos',
        ],
        'visitors' => 'Visitantes',
        'pageviews' => 'Visualizações',
        'bounce_rate' => 'Taxa de rejeição',
        'last_30_days' => 'Últimos 30 dias',
        'direct' => 'Direto / Nenhum',
        'unknown' => 'Desconhecido',
        'not_configured' => 'Não configurado',
        'not_configured_description' => 'Configure o ID da propriedade e a chave da conta de serviço do Google Analytics nas Configurações.',
        'no_data' => 'Nenhum dado disponível',
        'error' => 'Erro ao carregar os dados',
    ],
];
