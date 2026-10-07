<?php

namespace JeffersonGoncalves\Filament\MetricsGA4\Widgets;

use Filament\Widgets\Widget;
use JeffersonGoncalves\Filament\MetricsGA4\Concerns\InteractsWithGA4;
use JeffersonGoncalves\MetricsGA4\Data\StatsRow;
use JeffersonGoncalves\MetricsGA4\GA4;

/**
 * Top-N table for a single GA4 breakdown (pages, sources, countries...).
 */
abstract class BreakdownTableWidget extends Widget
{
    use InteractsWithGA4;

    protected static string $view = 'filament-metrics-ga4::widgets.breakdown-table';

    protected int|string|array $columnSpan = 1;

    abstract protected function tableHeading(): string;

    /**
     * Metric columns to show after the label column, as [metric key => header].
     *
     * @return array<string, string>
     */
    abstract protected function tableColumns(): array;

    abstract protected function tableLabelHeader(): string;

    /**
     * @return list<StatsRow>
     */
    abstract protected function fetchRows(GA4 $ga4): array;

    /**
     * @return array<string, mixed>
     */
    protected function getViewData(): array
    {
        $base = [
            'heading' => $this->tableHeading(),
            'labelHeader' => $this->tableLabelHeader(),
            'columns' => $this->tableColumns(),
            'configured' => $this->isGA4Configured(),
            'error' => null,
            'data' => [],
        ];

        if (! $base['configured']) {
            return $base;
        }

        try {
            $base['data'] = $this->cachedGA4Call(static::class, 300, fn (): array => $this->rowsToArray($this->fetchRows($this->getGA4())));
        } catch (\Throwable $e) {
            $base['error'] = $e->getMessage();
        }

        return $base;
    }
}
