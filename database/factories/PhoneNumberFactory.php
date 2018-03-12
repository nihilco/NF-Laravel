<?php

use Faker\Generator as Faker;

$factory->define(App\Models\PhoneNumber::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'resource_id' => function() {
            return factory(App\Models\Resource::class)->create()->id;
        },
        'country_code' => '+1',
        'area_code' => '123',
        'number' => $faker->phoneNumber,
    ];
});
