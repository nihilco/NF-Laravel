<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Task::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
    	'content' => $faker->sentence(rand(10,15), true),
        'due_at' => \Carbon\Carbon::now()->addDays(rand(1,7)),
    ];
});
