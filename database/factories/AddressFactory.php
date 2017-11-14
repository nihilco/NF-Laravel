<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Address::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'province_id' => function () {
	    return factory(App\Models\Province::class)->create()->id;
	},
	'address1' => $faker->streetAddress,
	'city' => $faker->city,
	'postal_code' => $faker->postCode,
    ];
});
