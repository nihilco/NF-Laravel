<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Fundraiser::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'name' => $faker->words(rand(1,4), true),
        'slug' => $faker->slug,
        'description' => $faker->paragraph(rand(4,6), true),
        'goal' => rand(100,10000),
        'actual' => rand(100,10000),
    ];
});
