<?php

namespace laraMar\Laramar;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use laraMar\Laramar\Commands\LaramarCommand;

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
            ->hasMigration('create_laramar_table')
            ->hasCommand(LaramarCommand::class);
    }
}
