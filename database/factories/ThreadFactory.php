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
	'forum_id' => function () {
	    return factory(App\Models\Forum::class)->create()->id;
	},
	'title' => $faker->words(rand(3,7), true),
	'slug' => $faker->slug,
	'content' => $faker->paragraph(rand(3, 6)),
	'replies_count' => rand(0,1000),
    ];
});
