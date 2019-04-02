<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class TMDB extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'tmdb';
    }
}

