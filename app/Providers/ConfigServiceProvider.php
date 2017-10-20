<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{
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
	$host = \Request::server("HTTP_HOST");
	$domain = \DB::table('domains')->where('host', $host)->first();

	$config = app('config');

	$paths = $config['view']['paths'];
	array_unshift($paths, base_path() . "/themes/" . $host . "/resources/views");

	$config->set('app.url', 'https://' . $host);
	$config->set('view.paths', $paths);

	// Set other variables based on domain
	// Title
	$config->set('view.title', $domain->title);
	// Stripe Account
	$config->set('services.stripe.connect.account', '');
	$config->set('services.stripe.connect.secret', '');
	$config->set('services.stripe.connect.publishable', '');
	// Emails
    }
}
