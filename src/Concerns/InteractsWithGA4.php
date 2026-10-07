<?php

namespace JeffersonGoncalves\Filament\MetricsGA4\Concerns;

use Illuminate\Support\Facades\Cache;
use JeffersonGoncalves\MetricsGA4\Data\StatsRow;
use JeffersonGoncalves\MetricsGA4\GA4;
use JeffersonGoncalves\MetricsGA4\Settings\GA4Settings;

trait InteractsWithGA4
{
    protected function isGA4Configured(): bool
    {
        $settings = app(GA4Settings::class);

        return $settings->property_id !== '' && $settings->service_account_json !== '';
    }

    protected function getGA4(): GA4
    {
        return app(GA4::class);
    }

    /**
     * @return mixed
     */
    protected function cachedGA4Call(string $key, int $ttl, callable $callback)
    {
        $propertyId = app(GA4Settings::class)->property_id;

        return Cache::remember("filament-metrics-ga4:{$propertyId}:{$key}", $ttl, $callback);
    }

    /**
     * Flatten stats rows into plain arrays (label + metrics) so they cache and render cleanly.
     *
     * @param  list<StatsRow>  $rows
     * @return list<array<string, mixed>>
     */
    protected function rowsToArray(array $rows): array
    {
        return array_map(
            fn (StatsRow $row): array => ['label' => $row->label] + $row->metrics,
            $rows,
        );
    }
}
