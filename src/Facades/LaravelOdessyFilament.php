<?php

namespace LaravelOdyssey\Filament\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \LaravelOdyssey\Filament\Filament
 */
class Filament extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \LaravelOdyssey\Filament\LaravelOdessyFilament::class;
    }
}
