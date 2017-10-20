<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Domain::class, function (Faker $faker) {

    $tld = $faker->safeEmailDomain;
    $today = \Carbon\Carbon::now();

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
	'account_id' => 1,
	'tld' => $tld,
	'host' => 'www.' . $tld,
        'title' => $faker->company,
	'registered_on' => $today->toDateString(),
	'expires_on' => $today->addYear()->toDateString(),
    ];
});
