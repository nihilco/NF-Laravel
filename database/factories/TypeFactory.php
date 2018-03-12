<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Type::class, function (Faker $faker) {

    static $model;
    
    return [
        //
        'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'model' => $model ?: $model = 'App\Models\Test',
        'name' => $faker->words(rand(2, 5), true),
        'slug' => $faker->slug,
        'description' => $faker->paragraph(rand(3, 6)),
    ];
    
});
