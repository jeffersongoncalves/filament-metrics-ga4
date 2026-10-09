<div class="filament-hidden">

![Filament Metrics GA4](https://raw.githubusercontent.com/jeffersongoncalves/filament-metrics-ga4/1.x/art/jeffersongoncalves-filament-metrics-ga4.png)

</div>

# Filament Metrics GA4

[![Buy Me A Coffee](https://img.shields.io/badge/Buy%20Me%20A%20Coffee-support-FFDD00?style=flat-square&logo=buy-me-a-coffee&logoColor=black)](https://buymeacoffee.com/jeffersongoncalves)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jeffersongoncalves/filament-metrics-ga4.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-metrics-ga4)
[![Tests](https://img.shields.io/github/actions/workflow/status/jeffersongoncalves/filament-metrics-ga4/tests.yml?branch=1.x&label=tests&style=flat-square)](https://github.com/jeffersongoncalves/filament-metrics-ga4/actions?query=workflow%3ATests+branch%3A1.x)
[![Total Downloads](https://img.shields.io/packagist/dt/jeffersongoncalves/filament-metrics-ga4.svg?style=flat-square)](https://packagist.org/packages/jeffersongoncalves/filament-metrics-ga4)
[![License](https://img.shields.io/packagist/l/jeffersongoncalves/filament-metrics-ga4.svg?style=flat-square)](LICENSE.md)

[Google Analytics 4](https://analytics.google.com) dashboard widgets for Filament, with a settings page powered by [Spatie Laravel Settings](https://github.com/spatie/laravel-settings) to manage the GA4 property ID and service account key directly from the admin panel.

Built on top of [jeffersongoncalves/laravel-metrics-ga4](https://github.com/jeffersongoncalves/laravel-metrics-ga4) (GA4 Data API, service account auth).

## Compatibility

| Branch | Filament | Package version |
|--------|----------|-----------------|
| 1.x | 3.x | `^1.0` |
| 2.x | 4.x | `^2.0` |
| 3.x | 5.x | `^3.0` |

## Installation

You can install the package via composer:

```bash
composer require jeffersongoncalves/filament-metrics-ga4:"^1.0"
```

Publish the settings migrations and run them:

```bash
php artisan vendor:publish --tag=metrics-ga4-settings-migrations
php artisan migrate
```

## Google Cloud setup

1. Enable the **Google Analytics Data API** in a Google Cloud project.
2. Create a **service account** and download its JSON key.
3. In Google Analytics, **Admin → Property access management**: add the service account's `client_email` as **Viewer**.
4. Copy the numeric **Property ID** from **Admin → Property details**.

## Usage

Add the plugin to your Filament panel provider:

```php
use JeffersonGoncalves\Filament\MetricsGA4\GA4MetricsPlugin;

public function panel(Panel $panel): Panel
{
    return $panel
        ->plugins([
            GA4MetricsPlugin::make(),
        ]);
}
```

Then open **Settings > Google Analytics** in your panel, fill in the property ID and paste the service account JSON key (stored encrypted).

### Widgets

All widgets cover the last 30 days and are cached (15s for realtime, 5 minutes for the rest):

| Widget | Shows |
|--------|-------|
| `RealtimeVisitorsWidget` | Active users in the last 30 minutes, users, pageviews, bounce rate and session duration |
| `VisitorsChartWidget` | Daily users and pageviews line chart |
| `TopPagesWidget` | Top 10 pages by users |
| `TopSourcesWidget` | Top 10 session sources with bounce rate |
| `TopCountriesWidget` | Top 10 countries |
| `TopBrowsersWidget` | Browsers doughnut chart |
| `TopDevicesWidget` | Device categories doughnut chart |

### Customization

```php
GA4MetricsPlugin::make()
    ->settingsPage(false) // hide the settings page
    ->widgets(false),     // don't register the dashboard widgets
```

With `widgets(false)` you can still place the widget classes on any page yourself.

### Navigation group

Put the settings page in one of your panel's own navigation groups (a string or a closure):

```php
GA4MetricsPlugin::make()
    ->navigationGroup(fn (): string => __('admin.navigation.settings')),
```

## Requirements

- PHP 8.2 or higher (with the OpenSSL extension)
- Filament 3.x

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Jèfferson Gonçalves](https://github.com/jeffersongoncalves)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
