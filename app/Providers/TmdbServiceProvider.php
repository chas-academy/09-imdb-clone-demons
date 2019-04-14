<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Tmdb;

class TmdbServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('tmdb', function () {
            return new Tmdb();
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
