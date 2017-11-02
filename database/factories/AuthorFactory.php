<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Author::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'first_name' => $faker->firstName,
	'middle_name' => null,
	'last_name' => $faker->lastName,
	'description' => $faker->paragraph(rand(3, 6), true),
	'website' => null,
    ];
});
