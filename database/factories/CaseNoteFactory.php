<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\CaseNote::class, function (Faker $faker) {

    return [
        'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'case_id' => function () {
            return factory(App\Models\ClientCase::class)->create()->id;
        },
        'content' => $faker->paragraphs(1, true),
    ];
});
