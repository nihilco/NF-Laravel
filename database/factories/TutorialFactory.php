<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Tutorial::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'title' => $faker->words(rand(2, 6), true),
	'subtitle' => rand(0,1)==1 ? $faker->words(rand(2, 6), true) : null,
	'slug' => $faker->slug,
	'description' => $faker->paragraph(rand(3, 6), true),
    ];
});
