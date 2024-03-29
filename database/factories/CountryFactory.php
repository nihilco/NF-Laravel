<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Country::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'code' => $faker->countryCode,
        'name' => $faker->country,
    ];
});
