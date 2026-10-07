<?php

namespace JeffersonGoncalves\Filament\MetricsGA4\Widgets;

use JeffersonGoncalves\MetricsGA4\GA4;

class TopCountriesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string
    {
        return __('filament-metrics-ga4::metrics-ga4.widgets.top_countries.label');
    }

    protected function tableLabelHeader(): string
    {
        return __('filament-metrics-ga4::metrics-ga4.widgets.top_countries.country');
    }

    protected function tableColumns(): array
    {
        return [
            'visitors' => __('filament-metrics-ga4::metrics-ga4.widgets.visitors'),
            'pageviews' => __('filament-metrics-ga4::metrics-ga4.widgets.pageviews'),
        ];
    }

    protected function fetchRows(GA4 $ga4): array
    {
        return $ga4->breakdown('country', metrics: ['visitors', 'pageviews'], limit: 10);
    }
}
