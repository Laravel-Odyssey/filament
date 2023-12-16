<?php

namespace LaravelOdyssey\Filament\Filters;

use Exception;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class FromUntilDateRangeFilter extends Filter
{
    public static function make(?string $name = null): static
    {
        $filterClass = static::class;

        $name ??= static::getDefaultName();

        if (blank($name)) {
            throw new Exception("Filter of class [$filterClass] must have a unique name, passed to the [make()] method.");
        }

        $static = app($filterClass, ['name' => $name]);
        $static->configure();

        self::form([
            DatePicker::make('from'),
            DatePicker::make('until'),
        ])
            ->query(function (Builder $query, array $data) use ($name): Builder {
                return $query
                    ->when(
                        $data['from'],
                        fn (Builder $query, $date): Builder => $query->whereDate($name, '>=', $date),
                    )
                    ->when(
                        $data['until'],
                        fn (Builder $query, $date): Builder => $query->whereDate($name, '<=', $date),
                    );
            });

        return $static;
    }
}
