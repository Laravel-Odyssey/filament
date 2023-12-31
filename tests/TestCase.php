<?php

namespace LaravelOdyssey\Filament\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use LaravelOdyssey\Filament\FilamentServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'LaravelOdyssey\\Filament\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            FilamentServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_Filament_table.php.stub';
        $migration->up();
        */
    }
}
