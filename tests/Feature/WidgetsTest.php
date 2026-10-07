<?php

use JeffersonGoncalves\Filament\MetricsGA4\Concerns\InteractsWithGA4;
use JeffersonGoncalves\MetricsGA4\Data\StatsRow;
use JeffersonGoncalves\MetricsGA4\Settings\GA4Settings;

function ga4Probe(): object
{
    return new class
    {
        use InteractsWithGA4;

        public function configured(): bool
        {
            return $this->isGA4Configured();
        }

        /**
         * @param  list<StatsRow>  $rows
         * @return list<array<string, mixed>>
         */
        public function flatten(array $rows): array
        {
            return $this->rowsToArray($rows);
        }
    };
}

it('detects when ga4 is not configured', function () {
    expect(ga4Probe()->configured())->toBeFalse();
});

it('detects when ga4 is configured', function () {
    $settings = app(GA4Settings::class);
    $settings->property_id = '123456789';
    $settings->service_account_json = '{"client_email":"x@example.com","private_key":"k"}';
    $settings->save();

    expect(ga4Probe()->configured())->toBeTrue();
});

it('flattens stats rows into label + metrics arrays', function () {
    $rows = [
        new StatsRow('/pricing', ['pagePath' => '/pricing'], ['visitors' => 12, 'pageviews' => 30]),
    ];

    expect(ga4Probe()->flatten($rows))->toBe([
        ['label' => '/pricing', 'visitors' => 12, 'pageviews' => 30],
    ]);
});
