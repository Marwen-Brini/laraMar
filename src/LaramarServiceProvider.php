<?php

namespace laraMar\Laramar;

use laraMar\Laramar\Commands\LaramarCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaramarServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laramar')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigrations(['create_my_models_table','create_my_customs_table'])
            ->hasCommand(LaramarCommand::class);
    }
}
