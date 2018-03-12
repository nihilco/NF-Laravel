<?php

use Faker\Generator as Faker;

$factory->define(App\Models\User::class, function (Faker $faker) {

    static $creator_id, $owner_id, $password;

    $username = $faker->userName . rand(1,9);

    return [
        'creator_id' => $creator_id ?: $creator_id = 1,
        'owner_id' => $owner_id ?: $owner_id = 1,
        'name' => $faker->name,
    	'username' => $username,
        'email' => $username . '@' . $faker->domainName,
        'password' => $password ?: $password = Hash::make(str_random(16)),
        'remember_token' => str_random(10),
        'birthday' => $faker->dateTimeThisCentury->format('Y-m-d')
    ];
});
