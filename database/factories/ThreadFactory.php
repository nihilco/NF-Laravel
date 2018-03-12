<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Thread::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'topic_id' => function () {
            return factory(App\Models\Topic::class)->create()->id;
        },
        'title' => $faker->words(rand(3,7), true),
        'slug' => $faker->slug,
        'content' => $faker->paragraph(rand(3, 6)),
        'replies_count' => 0,
        'last_reply_at' => null,
        'favorites_count' => 0,
    ];
});
