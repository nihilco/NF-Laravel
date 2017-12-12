<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {
    static $password;

    $username = $faker->userName . rand(1,9);

    return [
        'name' => $faker->name,
    	'username' => $username,
        'email' => $username . '@' . $faker->domainName,
        'password' => $password ?: $password = bcrypt(str_random(16)),
        'remember_token' => str_random(10),
	'birthday' => $faker->dateTimeThisCentury->format('Y-m-d')
    ];
});
