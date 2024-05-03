<?php

namespace DevIDKWHOAMI\ColoredInputs;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ColoredInputsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('colored-inputs')
            ->hasViews()
            ->hasAssets();
    }

    public function packageBooted()
    {
        FilamentAsset::register([
            Css::make('colored-input', __DIR__ . '/../dist/colored-inputs.css'),
            AlpineComponent::make('colored-input', __DIR__ . '/../dist/colored-inputs.js'),
        ], 'dev-idkwhoami/colored-inputs');
    }
}
