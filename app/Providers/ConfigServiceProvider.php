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
	    $domain = factory(\App\Models\Domain::class)->make([
	        'tld' => 'nihilframework.com',
		'host' => 'www.nihilframework.com',
		'title' => 'NIHIL Framework',
	    ]);
	}else{
	    $domain = \DB::table('domains')->where('host', $host)->first();
	}

	$config = app('config');

	$paths = $config['view']['paths'];
	array_unshift($paths, base_path() . "/themes/" . $host . "/resources/views");

	$config->set('app.url', 'https://' . $host);
	$config->set('view.paths', $paths);

	// Set other variables based on domain
	// Title
	$title = $host;
	if($domain) {
	    if($domain->title != "") {
	        $title = $domain->title;
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
