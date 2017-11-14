<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Plan::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'stripe_id' => 'pla' . str_random(14),
	'name' => $faker->words(rand(1,4), true),
	'amount' => rand(100, 99999999),
	'interval_count' => 1,
	'interval' => 'months',
    ];
});
