<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Resource::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'type_id' => function () {
            return factory(App\Models\Type::class)->create()->id;
        },
        'name' => $faker->words(rand(2,4), true),
        'description' => $faker->paragraph(rand(3,6), true),
    ];
});
