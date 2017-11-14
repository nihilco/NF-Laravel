<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Publisher::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'address_id' => function () {
	    return factory(App\Models\Address::class)->create()->id;
	},
	'name' => $faker->company,
	'website' => $faker->domainName,
    ];
});
