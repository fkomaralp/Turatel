<?php

namespace Fkomaralp\Turatel;

class TuratelServiceProvider extends \Illuminate\Support\ServiceProvider
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
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Turatel::class, function($app){
            return new Turatel();
        });
    }
}
