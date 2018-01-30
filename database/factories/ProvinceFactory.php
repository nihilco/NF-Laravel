<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Province::class, function (Faker $faker) {

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
	'country_id' => function () {
	    return factory(App\Models\Country::class)->create()->id;
	},
	'abbr' => $faker->stateAbbr,
	'name' => $faker->state,
    ];
});
