<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tag::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'name' => $faker->words(rand(1,3), true),
        'slug' => str_random(10),
        'description' => $faker->paragraph(rand(3,6), true),
    ];
});
