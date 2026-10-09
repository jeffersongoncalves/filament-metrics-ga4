<?php

namespace JeffersonGoncalves\Filament\MetricsGA4\Pages;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use JeffersonGoncalves\FilamentAnalyticsCore\AbstractAnalyticsPlugin;
use JeffersonGoncalves\MetricsGA4\Settings\GA4Settings;

class GA4MetricsSettingsPage extends SettingsPage
{
    protected static string $settings = GA4Settings::class;

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-chart-bar-square';

    public static function getNavigationGroup(): string|\UnitEnum|null
    {
        return AbstractAnalyticsPlugin::navigationGroupFor('filament-metrics-ga4') ?? __('filament-metrics-ga4::metrics-ga4.navigation_group');
    }

    public static function getNavigationLabel(): string
    {
        return __('filament-metrics-ga4::metrics-ga4.navigation_label');
    }

    public function getTitle(): string
    {
        return __('filament-metrics-ga4::metrics-ga4.title');
    }

    public function form(Schema $schema): Schema
    {
        return $schema
            ->schema([
                Section::make(__('filament-metrics-ga4::metrics-ga4.sections.api_configuration'))
                    ->schema([
                        TextInput::make('property_id')
                            ->label(__('filament-metrics-ga4::metrics-ga4.fields.property_id.label'))
                            ->helperText(__('filament-metrics-ga4::metrics-ga4.fields.property_id.helper'))
                            ->placeholder('123456789')
                            ->required(),

                        Textarea::make('service_account_json')
                            ->label(__('filament-metrics-ga4::metrics-ga4.fields.service_account_json.label'))
                            ->helperText(__('filament-metrics-ga4::metrics-ga4.fields.service_account_json.helper'))
                            ->placeholder('{"type": "service_account", ...}')
                            ->rows(6)
                            ->json()
                            ->required(),
                    ]),
            ]);
    }
}
