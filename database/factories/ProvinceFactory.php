<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Province::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'country_id' => function () {
            return factory(App\Models\Country::class)->create()->id;
        },
        'abbr' => $faker->stateAbbr,
        'name' => $faker->state,
    ];
});
