<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Product::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'name' => $faker->words(rand(1,4), true),
        'description' => $faker->paragraph(rand(4,6), true),
        'cost' => rand(100,10000),
        'price' => rand(100,10000),
    ];
});
