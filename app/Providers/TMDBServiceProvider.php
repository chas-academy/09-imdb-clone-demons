<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TMDB;

class TMDBServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('tmdb', function () {
            return new TMDB();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
