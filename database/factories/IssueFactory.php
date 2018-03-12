<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Issue::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'type_id' => function () {
            return factory(App\Models\Type::class)->create()->id;
        },
        'status_id' => function () {
            return factory(App\Models\Status::class)->create()->id;
        },
        'priority_id' => function () {
            return factory(App\Models\Priority::class)->create()->id;
        },
        'slug' => $faker->slug,
        'subject' => $faker->words(rand(4,9), true),
        'content' => $faker->paragraph(rand(3,5), true),
        'assignee_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'resolution_id' => function () {
            return factory(App\Models\Resolution::class)->create()->id;
	},
    ];
});
