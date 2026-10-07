<?php

namespace JeffersonGoncalves\Filament\MetricsGA4;

use Filament\Panel;
use JeffersonGoncalves\Filament\MetricsGA4\Pages\GA4MetricsSettingsPage;
use JeffersonGoncalves\Filament\MetricsGA4\Widgets\RealtimeVisitorsWidget;
use JeffersonGoncalves\Filament\MetricsGA4\Widgets\TopBrowsersWidget;
use JeffersonGoncalves\Filament\MetricsGA4\Widgets\TopCountriesWidget;
use JeffersonGoncalves\Filament\MetricsGA4\Widgets\TopDevicesWidget;
use JeffersonGoncalves\Filament\MetricsGA4\Widgets\TopPagesWidget;
use JeffersonGoncalves\Filament\MetricsGA4\Widgets\TopSourcesWidget;
use JeffersonGoncalves\Filament\MetricsGA4\Widgets\VisitorsChartWidget;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;

class GA4MetricsPlugin extends AbstractAnalyticsPlugin
{
    protected bool $hasWidgets = true;

    public function getId(): string
    {
        return 'filament-metrics-ga4';
    }

    protected function getSettingsPageClass(): ?string
    {
        return GA4MetricsSettingsPage::class;
    }

    public function register(Panel $panel): void
    {
        parent::register($panel);

        if ($this->hasWidgets) {
            $panel->widgets([
                RealtimeVisitorsWidget::class,
                VisitorsChartWidget::class,
                TopPagesWidget::class,
                TopSourcesWidget::class,
                TopCountriesWidget::class,
                TopBrowsersWidget::class,
                TopDevicesWidget::class,
            ]);
        }
    }

    public function widgets(bool $condition = true): static
    {
        $this->hasWidgets = $condition;

        return $this;
    }
}
