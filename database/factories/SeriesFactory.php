<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\Series::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'name' => $faker->words(rand(3,5), true),
        'slug' => $faker->slug,
        'description' => $faker->paragraph(rand(3, 6), true),
        'books_in_series' => 1,
    ];
});
