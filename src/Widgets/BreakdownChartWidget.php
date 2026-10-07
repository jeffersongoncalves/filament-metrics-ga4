<?php

namespace JeffersonGoncalves\Filament\MetricsGA4\Widgets;

use Filament\Widgets\ChartWidget;
use JeffersonGoncalves\Filament\MetricsGA4\Concerns\InteractsWithGA4;
use JeffersonGoncalves\MetricsGA4\Data\StatsRow;
use JeffersonGoncalves\MetricsGA4\GA4;

/**
 * Doughnut chart of visitors for a single GA4 breakdown (browsers, devices...).
 */
abstract class BreakdownChartWidget extends ChartWidget
{
    use InteractsWithGA4;

    protected int|string|array $columnSpan = 1;

    protected static ?string $maxHeight = '300px';

    /**
     * @return list<StatsRow>
     */
    abstract protected function fetchRows(GA4 $ga4): array;

    protected function getType(): string
    {
        return 'doughnut';
    }

    protected function getData(): array
    {
        $empty = ['datasets' => [], 'labels' => []];

        if (! $this->isGA4Configured()) {
            return $empty;
        }

        try {
            $rows = $this->cachedGA4Call(static::class, 300, fn (): array => $this->rowsToArray($this->fetchRows($this->getGA4())));

            if ($rows === []) {
                return $empty;
            }

            return [
                'datasets' => [
                    [
                        'data' => array_map(fn (array $row): int => (int) ($row['visitors'] ?? 0), $rows),
                        'backgroundColor' => [
                            '#6366f1', '#f59e0b', '#10b981', '#ef4444',
                            '#8b5cf6', '#06b6d4', '#f97316', '#ec4899',
                        ],
                    ],
                ],
                'labels' => array_map(fn (array $row): string => $row['label'] !== '' ? $row['label'] : __('filament-metrics-ga4::metrics-ga4.widgets.unknown'), $rows),
            ];
        } catch (\Throwable) {
            return $empty;
        }
    }
}
