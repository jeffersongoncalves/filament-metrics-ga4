<?php

namespace JeffersonGoncalves\Filament\MetricsGA4\Widgets;

use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use JeffersonGoncalves\Filament\MetricsGA4\Concerns\InteractsWithGA4;

class RealtimeVisitorsWidget extends StatsOverviewWidget
{
    use InteractsWithGA4;

    protected ?string $pollingInterval = '30s';

    protected int|string|array $columnSpan = 'full';

    protected function getStats(): array
    {
        if (! $this->isGA4Configured()) {
            return [
                Stat::make(
                    __('filament-metrics-ga4::metrics-ga4.widgets.not_configured'),
                    __('filament-metrics-ga4::metrics-ga4.widgets.not_configured_description'),
                ),
            ];
        }

        try {
            $realtime = $this->cachedGA4Call('realtime-visitors', 15, fn (): int => $this->getGA4()->realtimeVisitors());

            $totals = $this->cachedGA4Call('aggregate-30d', 300, fn (): array => $this->getGA4()->aggregate()->toArray());

            return [
                Stat::make(__('filament-metrics-ga4::metrics-ga4.widgets.realtime.current'), number_format($realtime))
                    ->icon('heroicon-o-signal'),
                Stat::make(__('filament-metrics-ga4::metrics-ga4.widgets.realtime.visitors'), number_format((int) ($totals['visitors'] ?? 0)))
                    ->description(__('filament-metrics-ga4::metrics-ga4.widgets.last_30_days'))
                    ->icon('heroicon-o-users'),
                Stat::make(__('filament-metrics-ga4::metrics-ga4.widgets.realtime.pageviews'), number_format((int) ($totals['pageviews'] ?? 0)))
                    ->description(__('filament-metrics-ga4::metrics-ga4.widgets.last_30_days'))
                    ->icon('heroicon-o-eye'),
                Stat::make(__('filament-metrics-ga4::metrics-ga4.widgets.realtime.bounce_rate'), round((float) ($totals['bounce_rate'] ?? 0)).'%')
                    ->description(__('filament-metrics-ga4::metrics-ga4.widgets.last_30_days'))
                    ->icon('heroicon-o-arrow-uturn-left'),
                Stat::make(__('filament-metrics-ga4::metrics-ga4.widgets.realtime.visit_duration'), gmdate('i:s', (int) ($totals['visit_duration'] ?? 0)))
                    ->description(__('filament-metrics-ga4::metrics-ga4.widgets.last_30_days'))
                    ->icon('heroicon-o-clock'),
            ];
        } catch (\Throwable $e) {
            return [
                Stat::make(
                    __('filament-metrics-ga4::metrics-ga4.widgets.error'),
                    $e->getMessage(),
                ),
            ];
        }
    }
}
