<?php

namespace Name\Rockpaperscissors;

use Illuminate\Support\ServiceProvider;

class RockPaperScissorsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Register the package routes
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        // Register the views
        $this->loadViewsFrom(__DIR__.'/resources/views', 'rockpaperscissors');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish config files
        $this->publishes([
            __DIR__.'/config/rockpaperscissors.php' => config_path('rockpaperscissors.php'),
        ], 'config');
    }
}
