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

	if (\App::runningInConsole())
	{
	    $website = factory(\App\Models\Domain::class)->make([
		'hostname' => 'www.nihilframework.com',
		'title' => 'NIHIL Framework',
	    ]);
	}else{
	    $website = \DB::table('websites')->where('hostname', $host)->first();
	}

	$config = app('config');

	$paths = $config['view']['paths'];
	array_unshift($paths, base_path() . "/themes/" . $host . "/resources/views");

	$config->set('app.url', 'https://' . $host);
	$config->set('view.paths', $paths);

	// Set other variables based on domain
	// Title
	$title = $host;
	if($website) {
	    if($website->title != "") {
	        $title = $website->title;
	    }
	}
	$config->set('view.title', $title);
	// Stripe Account
	$config->set('services.stripe.connect.account', '');
	$config->set('services.stripe.connect.secret', '');
	$config->set('services.stripe.connect.publishable', '');
	// Emails
    }
}
