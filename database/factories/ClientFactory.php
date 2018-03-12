<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Client::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'name' => $faker->name,
        'description' => $faker->paragraphs(1, true),
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'address1' => $faker->streetAddress,
        'city' => $faker->city,
        'province_id' => function () {
            return factory(App\Models\Province::class)->create()->id;
        },
        'postal_code' => $faker->postcode,
    ];
});
