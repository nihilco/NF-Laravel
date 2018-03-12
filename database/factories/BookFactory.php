<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Book::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'title_display' => $title = $faker->words(rand(2, 5), true),
        'title_alphabetic' => $title,
        'slug' => $faker->slug,
        'description' => $faker->paragraph(rand(3,6), true),
    ];
});
