<?php

namespace LaravelOdyssey\Filament\Commands;

use Illuminate\Console\Command;

class LaravelOdessyFilamentCommand extends Command
{
    public $signature = 'Filament';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
