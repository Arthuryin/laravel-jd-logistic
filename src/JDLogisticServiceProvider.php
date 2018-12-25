<?php

namespace Arthuryinzhen\JDLogistic;

use Illuminate\Support\ServiceProvider;

class JDLogisticServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/JdLogistic.php' => config_path('JdLogistic.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $configPath = realpath(__DIR__ . '/../config/JdLogistic.php');
        $this->mergeConfigFrom($configPath, 'JdLogistic');
        $this->publishes([$configPath => config_path('JdLogistic.php')], 'config');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
    }

}
