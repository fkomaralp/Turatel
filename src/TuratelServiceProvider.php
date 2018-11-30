<?php

namespace Fkomaralp\Turatel;

use Illuminate\Support\ServiceProvider;
use Fkomaralp\Turatel\Turatel;

class TuratelServiceProvider extends ServiceProvider
{
     /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $configPath = __DIR__ . '/../config/turatel.php';
        $this->publishes([$configPath => config_path('turatel.php')], 'config');

        $this->app->singleton('turatel', function($app){
            return new Turatel();
        });

    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {

    }
}
