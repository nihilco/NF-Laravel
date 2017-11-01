<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Organization::class, function (Faker $faker) {
    return [
   	'creator_id' => 1,
	'owner_id' => 1,
    ];
});
