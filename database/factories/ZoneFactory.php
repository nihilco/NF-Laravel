<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Zone::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'domain_id' => function () {
            return factory(App\Models\Domain::class)->create()->id;
        },
        'nameserver' => 'ns1' . $faker->safeEmailDomain,
        'email' => $faker->email,
    ];
});
