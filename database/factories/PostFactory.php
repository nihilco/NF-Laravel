<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Post::class, function (Faker $faker) {

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
	'title' => '',
	'slug' => '',
	'description' => '',
	'content' => '',
	'views_count' => 0,
	'last_viewed_at' => '',
	'published_at' => '',
    ];
});
