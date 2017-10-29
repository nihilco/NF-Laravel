<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Website::class, function (Faker $faker) {

    $today = \Carbon\Carbon::now();
    $domain = \App\Models\Domain::find(1);

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
	'domain_id' => $domain->id,
	'account_id' => null,
	'hostname' => 'www.' . $domain->tld,
        'title' => $faker->company,
    ];
});
