<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\ClientCase::class, function (Faker $faker) {

    return [
        'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'client_id' => function () {
            return factory(App\Models\Client::class)->create()->id;
        },
        'case_type_id' => function () {
            return factory(App\Models\CaseType::class)->create()->id;
        },
        'county' => $faker->word,
        'description' => $faker->paragraphs(1, true),
    ];
});
