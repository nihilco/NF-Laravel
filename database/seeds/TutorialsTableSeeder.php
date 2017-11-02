<?php

use Illuminate\Database\Seeder;

class TutorialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$tutorial1 = factory(App\Models\Tutorial::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'Basic Server Setup',
	    'subtitle' => 'On Ubuntu 16.04',
	    'slug' => 'basic-server-setup',
	    'description' => 'Many of us need a cookie-cutter example of a basic web server to start us off.  Well, in this tutorial, we will discuss the basic steps to setting up a generic Ubuntu 16.04 server.',
	]);
	
	$tutorial2 = factory(App\Models\Tutorial::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'Authoritative Nameserver Setup',
	    'subtitle' => 'On Ubuntu 16.04 with Bind',
	    'slug' => 'authoritative-nameserver-setup',
	    'description' => 'In this tutorial we will discuss how to setup an authoritative nameserver on Ubuntu 16.04 with Bind.',
	]);

	$tutorial3 = factory(App\Models\Tutorial::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'Web Server Setup',
	    'subtitle' => 'On Ubuntu 16.04 with Apache2 and PHP7',
	    'slug' => 'web-server-setup',
	    'description' => 'Today, I will show you how to setup a web server on Ubuntu 16.04 with Apache2, PHP7, and much more.',
	]);
    }
}
