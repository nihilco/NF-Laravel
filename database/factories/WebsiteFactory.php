<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Website::class, function (Faker $faker) {

    $domain = new App\Models\Domain();
    $today = \Carbon\Carbon::now();

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'domain_id' => function () use (&$domain) {
	    $domain = factory(App\Models\Domain::class)->create();
	    return $domain->id; 
	},
	'account_id' => function () {
	    return factory(App\Models\Account::class)->create()->id;
	},
	'hostname' => 'www.' . $domain->tld,
        'title' => $faker->company,
    ];
});
