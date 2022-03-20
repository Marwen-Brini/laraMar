<?php

namespace laraMar\Laramar\Commands;

use Illuminate\Console\Command;

class LaramarCommand extends Command
{
    public $signature = 'report:me';

    public $description = 'My command';

    public function handle(): int
    {
        $text = config('laramar.command_output');
        $this->comment($text);

        return self::SUCCESS;
    }
}
