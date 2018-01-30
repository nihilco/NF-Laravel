<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {

    $title = $faker->words(rand(2, 5), true);

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
	'series_id' => null,
	'series_order' => 1,
	'title_display' => $title,
	'title_alphabetic' => $title,
	'subtitle' => null,
	'slug' => $faker->slug,
	'description' => $faker->paragraph(rand(3,6), true),
    ];
});
