<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\ClientCase::class, function (Faker $faker) {
    return [
   	'creator_id' => 1,
	'owner_id' => 1,
	'account_id' => 1,
	'case_type_id' => rand(1,5),
	'name' => $faker->words(rand(3,6), true),
	'description' => $faker->paragraphs(1, true),
    ];
});
