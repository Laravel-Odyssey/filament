<?php

namespace LaravelOdyssey\Filament;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use LaravelOdyssey\Filament\Commands\LaravelOdessyFilamentCommand;

class FilamentServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('LaravelOrdessyFilament')
            ->hasMigration('create_fcm_tokens')
            ->hasCommands(LaravelOdessyFilamentCommand::class);
    }
}
