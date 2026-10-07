<?php

use JeffersonGoncalves\Filament\MetricsGA4\Pages\GA4MetricsSettingsPage;

it('can render the settings page', function () {
    $this->get(GA4MetricsSettingsPage::getUrl())
        ->assertSuccessful();
})->skip('Requires authenticated user');

it('has the correct navigation label', function () {
    expect(GA4MetricsSettingsPage::getNavigationLabel())
        ->toBe('Google Analytics');
});
