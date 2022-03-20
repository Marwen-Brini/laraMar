<?php

namespace laraMar\Laramar\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use laraMar\Laramar\LaramarServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
use Illuminate\Support\Facades\Schema;


class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'laraMar\\Laramar\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaramarServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
       /* config()->set('database.default', 'testing');

        $migrations = [include __DIR__.'/../database/migrations/create_my_models_table.php.stub',include __DIR__.'/../database/migrations/create_my_customs_table.php.stub'];
        foreach ($migrations as $migration){
            $migration->up();
        }*/
        Schema::dropIfExists('my_models');
        Schema::dropIfExists('my_customs');
        $migrations = [include __DIR__.'/../database/migrations/create_my_models_table.php.stub',include __DIR__.'/../database/migrations/create_my_customs_table.php.stub'];
        foreach ($migrations as $migration){
            $migration->up();
        }


    }
}
