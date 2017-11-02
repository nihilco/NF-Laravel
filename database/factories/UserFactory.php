<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
    	'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt(str_random(16)),
        'remember_token' => str_random(10),
	'birthday' => $faker->dateTimeThisCentury->format('Y-m-d')
    ];
});
