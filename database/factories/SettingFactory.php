<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Setting::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
    	'name' => $faker->words(rand(1,3), true),
        'description' => $faker->paragraph(rand(3,5), true),
        'value' => $faker->word,
        'value_type_id' => function () {
            return factory(App\Models\Type::class)->create()->id;
        },
    ];
});
