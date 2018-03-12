<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Device::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'nickname' => $faker->word,
        'last_used_on' => \Carbon\Carbon::now(),
    ];
});
