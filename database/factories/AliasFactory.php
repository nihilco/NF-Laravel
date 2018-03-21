<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Alias::class, function (Faker $faker) {

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
        'type_id' => function () {
            return factory(App\Models\Type::class)->create()->id;
        },
        'source' => 'user@example.com',
        'destination' => 'user@example.com',
    ];
});
