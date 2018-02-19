<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Client::class, function (Faker $faker) {

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
	'account_id' => 1,
	'name' => $faker->name,
	'description' => $faker->paragraphs(1, true),
	'email' => $faker->email,
	'phone' => $faker->phoneNumber,
	'address1' => $faker->streetAddress,
	'city' => $faker->city,
	'province_id' => \App\Models\Province::where('abbr', $faker->stateAbbr)->first()->id,
	'postal_code' => $faker->postcode,
    ];
});
