<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customer::class, function (Faker $faker) {

    return [
    	'creator_id' => 1,
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'account_id' => 1,
	'type' => 'unknown',
	'stripe_id' => 'cus_' . str_random(12),
	'name' => $faker->company,
    ];
});
