<?php

namespace Fkomaralp\Turatel\Facades;

use Fkomaralp\Turatel\Turatel;

class Facade extends \Illuminate\Support\Facades\Facade
{
    /**
     *  Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Turatel::class;
    }
}