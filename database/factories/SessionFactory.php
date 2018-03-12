<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Session::class, function (Faker $faker) {

    return [
        'id' => $faker->uuid,
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'user_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
    	'ip_address' => $faker->ipv4,
        'user_agent' => $faker->userAgent,
        'payload' => '',
        'last_activity' => time(), 
    ];
});
