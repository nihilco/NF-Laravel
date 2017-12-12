<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Channel::class, function (Faker $faker) {

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
	'title' => $faker->words(rand(3,7), true),
	'slug' => $faker->slug,
	'description' => $faker->paragraph(rand(3,5), true),
	'forums_count' => 0,
	'favorites_count' => 0,
    ];
});
