<?php

namespace App\Providers;

use Goutte\Client;
use Illuminate\Support\ServiceProvider;

class GoutteServiceProvider extends ServiceProvider
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
	$this->registerGoutte();

	$this->registerAliases();
    }

    protected function registerGoutte()
    {
        $this->app->singleton('goutte', function ($app) {
	    return new \Goutte\Client();
	});
    }

    protected function registerAliases()
    {
        $this->app->alias('goutte', 'Goutte\Client');
    }

    public function provides()
    {
        return ['goutte'];
    }
}
