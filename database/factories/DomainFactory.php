<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Domain::class, function (Faker $faker) {

    $today = \Carbon\Carbon::now();

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
    	'customer_id' => 1,
	'tld' => $faker->safeEmailDomain,
	'registered_on' => $today->toDateString(),
	'expires_on' => $today->addYear()->toDateString(),
    ];
});
