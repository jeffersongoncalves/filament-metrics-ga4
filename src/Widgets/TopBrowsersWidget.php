<?php

namespace JeffersonGoncalves\Filament\MetricsGA4\Widgets;

use JeffersonGoncalves\MetricsGA4\GA4;

class TopBrowsersWidget extends BreakdownChartWidget
{
    public function getHeading(): string
    {
        return __('filament-metrics-ga4::metrics-ga4.widgets.top_browsers.label');
    }

    protected function fetchRows(GA4 $ga4): array
    {
        return $ga4->browsers(limit: 8);
    }
}
