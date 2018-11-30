<?php

namespace Fkomaralp\Turatel;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
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
        $this->app->bind(Client::class, function($app){
            return new Client();
        });
    }
}
