<?php

namespace laraMar\Laramar\Commands;

use Illuminate\Console\Command;

class LaramarCommand extends Command
{
    public $signature = 'laramar';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
