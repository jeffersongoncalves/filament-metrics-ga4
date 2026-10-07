<?php

namespace JeffersonGoncalves\Filament\MetricsGA4;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class GA4MetricsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-metrics-ga4')
            ->hasTranslations()
            ->hasViews();
    }
}
