<?php

namespace Osamasu\AdminLvp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Osamasu\AdminLvp\AdminLvp
 */
class AdminLvp extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Osamasu\AdminLvp\AdminLvp::class;
    }
}
