<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Forum::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'parent_id' => function () {
	    return rand(0,1) ? null : factory(App\Models\Forum::class)->create()->id;
	},
	'title' => $faker->words(rand(3,7), true),
	'slug' => $faker->slug,
	'description' => $faker->paragraph(rand(3,5), true),
	'threads_count' => rand(0,100),
	'replies_count' => rand(0,1000),
    ];
});
