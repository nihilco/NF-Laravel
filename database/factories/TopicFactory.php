<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Topic::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'channel_id' => function () {
            return factory(App\Models\Channel::class)->create()->id;
        },
        'title' => $faker->words(rand(3,7), true),
        'slug' => $faker->slug,
        'description' => $faker->paragraph(rand(3,5), true),
        'threads_count' => 0,
        'favorites_count' => 0,
    ];
});
