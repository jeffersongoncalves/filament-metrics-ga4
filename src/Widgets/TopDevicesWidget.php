<?php

namespace JeffersonGoncalves\Filament\MetricsGA4\Widgets;

use JeffersonGoncalves\MetricsGA4\GA4;

class TopDevicesWidget extends BreakdownChartWidget
{
    public function getHeading(): string
    {
        return __('filament-metrics-ga4::metrics-ga4.widgets.top_devices.label');
    }

    protected function fetchRows(GA4 $ga4): array
    {
        return $ga4->devices(limit: 8);
    }
}
