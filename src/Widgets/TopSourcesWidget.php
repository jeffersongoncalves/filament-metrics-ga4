<?php

namespace JeffersonGoncalves\Filament\MetricsGA4\Widgets;

use JeffersonGoncalves\MetricsGA4\GA4;

class TopSourcesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string
    {
        return __('filament-metrics-ga4::metrics-ga4.widgets.top_sources.label');
    }

    protected function tableLabelHeader(): string
    {
        return __('filament-metrics-ga4::metrics-ga4.widgets.top_sources.source');
    }

    protected function tableColumns(): array
    {
        return [
            'visitors' => __('filament-metrics-ga4::metrics-ga4.widgets.visitors'),
            'bounce_rate' => __('filament-metrics-ga4::metrics-ga4.widgets.bounce_rate'),
        ];
    }

    protected function fetchRows(GA4 $ga4): array
    {
        return $ga4->sources(limit: 10);
    }
}
