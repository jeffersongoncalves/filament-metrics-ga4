<?php

use JeffersonGoncalves\Filament\MetricsGA4\GA4MetricsPlugin;

function pluginFlag(GA4MetricsPlugin $plugin, string $property): bool
{
    $reflection = new ReflectionProperty($plugin, $property);
    $reflection->setAccessible(true);

    return $reflection->getValue($plugin);
}

it('can be instantiated', function () {
    expect(GA4MetricsPlugin::make())->toBeInstanceOf(GA4MetricsPlugin::class);
});

it('has the correct id', function () {
    expect(GA4MetricsPlugin::make()->getId())->toBe('filament-metrics-ga4');
});

it('enables the settings page and widgets by default', function () {
    $plugin = GA4MetricsPlugin::make();

    expect(pluginFlag($plugin, 'hasSettingsPage'))->toBeTrue()
        ->and(pluginFlag($plugin, 'hasWidgets'))->toBeTrue();
});

it('can disable the settings page', function () {
    expect(pluginFlag(GA4MetricsPlugin::make()->settingsPage(false), 'hasSettingsPage'))->toBeFalse();
});

it('can disable the widgets', function () {
    expect(pluginFlag(GA4MetricsPlugin::make()->widgets(false), 'hasWidgets'))->toBeFalse();
});
