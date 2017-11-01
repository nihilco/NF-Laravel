<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
	'series_id' => null,
	'series_order' => null,
	'title' => $faker->words(rand(2, 5), true),
	'subtitle' => null,
	'slug' => $faker->slug,
	'description' => $faker->paragraph(rand(3,6), true),
    ];
});
