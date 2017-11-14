<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Payment::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'customer_id' => function () {
	    return factory(App\Models\Customer::class)->create()->id;
	},
	'stripe_id' => 'pay_' . str_random(14),
	'amount' => rand(100,1000000),
    ];
});
