<?php

use Illuminate\Console\Command;
use laraMar\Laramar\Commands\LaramarCommand;
use function Pest\Laravel\artisan;

it('can test', closure: function () {
    //expect(true)->toBeTrue();
    //dd(config('database'));
    artisan(LaramarCommand::class)->assertExitCode(Command::SUCCESS);
});

it('can output the configured value',function(){
   artisan(LaramarCommand::class)->expectsOutput(config('laramar.command_output'))->assertExitCode(Command::SUCCESS);
});
it('can output another value value',function(){
    config()->set('laramar.command_output','something else');
    artisan(LaramarCommand::class)->expectsOutput('something else')->assertExitCode(Command::SUCCESS);
});
