<?php

namespace laraMar\Laramar\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \laraMar\Laramar\Laramar
 */
class Laramar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laramar';
    }
}
