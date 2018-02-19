<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class StripeServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
	$this->registerStripe();
	$this->registerAliases();
    }

    protected function registerStripe()
    {
        $this->app->singleton('stripe', function ($app) {
	    return new \Stripe\Stripe();
	});
    }

    protected function registerAliases()
    {
        $thsi->app->alias('stripe', 'Stripe\Stripe');
    }
}
