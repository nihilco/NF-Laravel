<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Currency::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'symbol' => '$',
        'abbr' => 'USD',
        'name' => 'US Dollar',
    ];
});
