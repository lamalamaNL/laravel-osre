<?php

namespace LamaLama\Osre;

use Illuminate\Support\Facades\Facade;

class OsreFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'osre';
    }
}
