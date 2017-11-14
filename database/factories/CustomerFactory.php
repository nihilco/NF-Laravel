<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customer::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'account_id' => function () {
	    return factory(App\Models\Account::class)->create()->id;
	},	
	'stripe_id' => 'cus' . str_random(12),
    ];
});
