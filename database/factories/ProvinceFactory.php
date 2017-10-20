<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Province::class, function (Faker $faker) {

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
    ];
});
