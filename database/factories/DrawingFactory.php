<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\ClientCase::class, function (Faker $faker) {
    return [
   	'creator_id' => 1,
	'owner_id' => 1,
	'lottery_id' => 1,
	'jackpot' => rand(10000,60000),
	'ball_one' => rand(1,69),
	'ball_two' => rand(1,69),
	'ball_three' => rand(1,69),
	'ball_four' => rand(1,69),
	'ball_five' => rand(1,69),
	'ball_bonus' => rand(1,26),
	'drawing_at' => \Carbon\Carbon::now(),
    ];
});
