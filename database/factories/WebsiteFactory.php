<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Website::class, function (Faker $faker) {

    $today = \Carbon\Carbon::now();

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
        'hostname' => 'www.' . $faker->domainName,
        'title' => $faker->company,
    ];
});
