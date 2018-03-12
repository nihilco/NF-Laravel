<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Email::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'subject' => $faker->sentence,
        'text' => $faker->paragraph(rand(5,7), true),
        'html' => $faker->randomHtml(2,3),
    ];
});
