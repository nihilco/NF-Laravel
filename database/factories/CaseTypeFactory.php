<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\CaseType::class, function (Faker $faker) {

    return [
        'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'name' => $faker->word,
        'description' => $faker->paragraphs(1, true),
    ];
});
