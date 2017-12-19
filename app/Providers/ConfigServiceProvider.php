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

	$markdownPaths = $config['mail']['markdown']['paths'];
	array_unshift($markdownPaths, base_path() . "/themes/" . $host . "/resources/views/vendor/mail");

	$config->set('app.url', 'https://' . $host);
	$config->set('view.paths', $paths);
	$config->set('mail.markdown.paths', $markdownPaths);

	//dd($config['mail']['markdown']['paths']);

	// Set other variables based on domain
	// Title
	$title = $host;
	$website_id = 1;
	if($website) {
	    if($website->title != "") {
	        $title = $website->title;
	    }
	    $website_id = $website->id;
	}
	$config->set('view.title', $title);
	$config->set('view.website_id', $website_id);
	// Stripe Account
	$config->set('services.stripe.connect.account', '');
	$config->set('services.stripe.connect.secret', '');
	$config->set('services.stripe.connect.publishable', '');
	// Emails
	$config->set('mail.from.address', 'no-reply@' . substr($host,4));
	$config->set('mail.from.name', 'No-Reply | ' . $title);
	$config->set('mail.contact.address', 'contact@' . substr($host,4));
	$config->set('mail.contact.name', 'Contact | ' . $title);
	$config->set('services.mailgun.domain', 'mailgun.' . substr($host,4));
    }
}
