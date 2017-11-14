<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Source::class, function (Faker $faker) {

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
	'type_id' => function () {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'stripe_id' => 'sourc' . str_random(14),
	'reference_number' => rand(1000,9999),
    ];
});
