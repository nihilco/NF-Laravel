<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Page::class, function (Faker $faker) {

    return [
   	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'website_id' => function () {
	    return factory(App\Models\Website::class)->create()->id;
	},
	'title' => $faker->words(rand(3, 5), true),
	'slug' => $faker->slug,
	'description' => $faker->paragraph(rand(3, 6)),
	'content' => $faker->paragraph(rand(10, 15)),
	'views_count' => 0,
	'last_viewed_at' => null,
	'published_at' => \Carbon\Carbon::now()->toDateString(),
    ];
});
