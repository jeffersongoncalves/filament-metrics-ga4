## Filament Metrics GA4

Google Analytics 4 dashboard widgets for Filament with a settings page powered by Spatie Laravel Settings. Reads the GA4 Data API with a service account.

### Installation

@verbatim
<code-snippet name="Install the plugin" lang="bash">
composer require jeffersongoncalves/filament-metrics-ga4:"^1.0"
php artisan vendor:publish --tag=metrics-ga4-settings-migrations
php artisan migrate
</code-snippet>
@endverbatim

### Register Plugin

@verbatim
<code-snippet name="Register in PanelProvider" lang="php">
use JeffersonGoncalves\Filament\MetricsGA4\GA4MetricsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            GA4MetricsPlugin::make()
                // ->settingsPage(false)
                // ->widgets(false)
                ,
        ]);
}
</code-snippet>
@endverbatim

### Widgets
- `RealtimeVisitorsWidget` — active users (last 30 minutes) + 30-day totals (15s cache for realtime)
- `VisitorsChartWidget` — daily users and pageviews
- `TopPagesWidget`, `TopSourcesWidget`, `TopCountriesWidget` — top-10 tables (extend `BreakdownTableWidget`)
- `TopBrowsersWidget`, `TopDevicesWidget` — doughnut charts (extend `BreakdownChartWidget`)

### Architecture
- `GA4MetricsPlugin` extends `JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin`, registers `GA4MetricsSettingsPage` and the widgets
- Widgets use the `InteractsWithGA4` concern: configuration check, `GA4` service and 5-minute cache keyed per property
- Settings: `JeffersonGoncalves\MetricsGA4\Settings\GA4Settings` (`property_id`, `service_account_json` encrypted)
- Translations live under `filament-metrics-ga4::metrics-ga4.*`

### Best Practices
- Add a new breakdown table by extending `BreakdownTableWidget` and implementing `tableHeading()`, `tableLabelHeader()`, `tableColumns()` and `fetchRows()`
- The service account must be a Viewer of the GA4 property, otherwise widgets show a 403 error message
