<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Domain::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            //return factory(App\Models\User::class)->create()->id;
            return 1;
        },
        'owner_id' => function () {
            //return factory(App\Models\User::class)->create()->id;
            return 1;
        },
    	'customer_id' => function () {
            //return factory(App\Models\Customer::class)->create()->id;
            return 1;
        },
        'tld' => $faker->safeEmailDomain,
        'registered_on' => \Carbon\Carbon::now()->toDateString(),
        'expires_on' => \Carbon\Carbon::now()->addYear()->toDateString(),
    ];
});
