<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Reply::class, function (Faker $faker) {

    $r = rand(1,1);

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'resource_id' => function () {
            return factory(App\Models\Resource::class)->create()->id;
        },
        'content' => $faker->paragraph(rand(3,6), true),
        'favorites_count' => 0,
    ];
});
