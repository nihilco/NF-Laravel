<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Exception::class, function (Faker $faker) {

    return [
        'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'type_id' => function () {
            return factory(App\Models\Type::class)->create(['model' => App\Models\Exception::class])->id;
        },
        'code' => $faker->numberBetween(100, 1000),
        'message' => $faker->sentence(rand(5,10), true),
    ];
});
