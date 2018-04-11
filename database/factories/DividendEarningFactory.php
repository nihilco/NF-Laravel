<?php

use Faker\Generator as Faker;

/* @var Illuminate\Database\Eloquent\Factory $factory */

$factory->define(App\Models\ClientCase::class, function (Faker $faker) {
    return [
   	'creator_id' => 1,
	'owner_id' => 1,
	'account_id' => 1,
	'stock_id' => 1,
	'earning' => rand(1,1000),
	'earned_at' => \Carbon\Carbon::now(),
    ];
});
