<?php

namespace Zogxray\Wayforpay;

use Illuminate\Support\ServiceProvider;

class WayForPayServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Configuration
        $this->publishes([
            __DIR__ . '/../config/wayforpay.php' => config_path('wayforpay.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        /**
         * Register main waiforpay service
         */
        $this->app->singleton('wayforpay', function($app) {
            return new WayForPay();
        });
    }
}