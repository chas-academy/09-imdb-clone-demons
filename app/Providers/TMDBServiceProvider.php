<?php

namespace App\Providers;

use App\Services\TMDB;
use Illuminate\Support\ServiceProvider;

class TMDBServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(TMDB::class, function () {
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
