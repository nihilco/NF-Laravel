<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Page::class, function (Faker $faker) {

    $tld = $faker->safeEmailDomain;
    $today = \Carbon\Carbon::now();

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
