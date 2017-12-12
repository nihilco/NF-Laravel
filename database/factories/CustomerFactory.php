<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customer::class, function (Faker $faker) {

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
	'account_id' => 1,
	'type_id' => 1,	
	'stripe_id' => 'cus' . str_random(12),
	'name' => $faker->company,
    ];
});
