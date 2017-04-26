<?php

namespace Duke\Map;

use Illuminate\Support\ServiceProvider;

class DukeMapServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //require __DIR__ . '/../vendor/autoload.php';
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //include __DIR__.'/routes.php';
        //$this->app->make(DukeMapController::class);
        $this->app->bind('mapFacade', function ($app) {
            return new \Duke\Map\Map;
        });
    }
}
