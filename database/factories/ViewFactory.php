<?php

use Faker\Generator as Faker;

$factory->define(App\Models\View::class, function (Faker $faker) {

    return [
        'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
    	'device_id' => function () {
            return factory(App\Models\Device::class)->create()->id;
        },
        'resource_id' => function () {
            return factory(App\Models\Resource::class)->create()->id;
        },
        'ip_address' => $faker->ipv4,
        'user_agent' => $faker->userAgent,
    ];
});
