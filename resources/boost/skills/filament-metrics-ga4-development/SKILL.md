---
name: filament-metrics-ga4-development
description: Build and work with the Filament Metrics GA4 plugin — Google Analytics 4 dashboard widgets, the settings page for the property ID and service account key, and custom breakdown widgets.
---

# Filament Metrics GA4 Development

## When to use this skill

Use this skill when:
- Showing Google Analytics 4 data in a Filament panel
- Adding or customizing GA4 widgets
- Debugging "not configured", authentication or 403 errors in the GA4 widgets

## Package Overview

- **Package**: `jeffersongoncalves/filament-metrics-ga4` (branch `1.x` for Filament 3.x)
- **Namespace**: `JeffersonGoncalves\Filament\MetricsGA4`
- **Dependencies**: `jeffersongoncalves/filament-analytics-core:^1.0`, `jeffersongoncalves/laravel-metrics-ga4:^1.0`
- **Service Provider**: `JeffersonGoncalves\Filament\MetricsGA4\GA4MetricsServiceProvider`

## Version Compatibility

| Branch | Filament | PHP |
|--------|----------|-----|
| 1.x | 3.x | ^8.2 |
| 2.x | 4.x | ^8.2 |
| 3.x | 5.x | ^8.2 |

## Setup

```php
use JeffersonGoncalves\Filament\MetricsGA4\GA4MetricsPlugin;

$panel->plugins([
    GA4MetricsPlugin::make(),
]);
```

```bash
php artisan vendor:publish --tag=metrics-ga4-settings-migrations
php artisan migrate
```

## Custom Breakdown Widget

```php
use JeffersonGoncalves\Filament\MetricsGA4\Widgets\BreakdownTableWidget;
use JeffersonGoncalves\MetricsGA4\GA4;

class TopLandingPagesWidget extends BreakdownTableWidget
{
    protected function tableHeading(): string { return 'Landing pages'; }

    protected function tableLabelHeader(): string { return 'Page'; }

    protected function tableColumns(): array { return ['visitors' => 'Users', 'visits' => 'Sessions']; }

    protected function fetchRows(GA4 $ga4): array
    {
        return $ga4->breakdown('landingPage', metrics: ['visitors', 'visits'], limit: 10);
    }
}
```

Metric names `visitors`, `visits`, `pageviews`, `bounce_rate`, `visit_duration` map to GA4's `activeUsers`, `sessions`, `screenPageViews`, `bounceRate`, `averageSessionDuration`; any other name is passed through as a raw GA4 metric.

## Settings Fields

| Field | Description |
|-------|-------------|
| `property_id` | Numeric GA4 property ID (Admin > Property details) |
| `service_account_json` | Full JSON key of a service account that is a Viewer of the property (stored encrypted) |

## Troubleshooting

- **"Not configured"**: save both the property ID and the service account JSON key in the settings page.
- **403 / "Viewer of the property"**: add the service account's `client_email` to the GA4 property with the Viewer role.
- **Token request rejected**: the JSON key was revoked or pasted incompletely; create a new key.
- **Stale numbers**: results are cached for 5 minutes (15 seconds for realtime users).
