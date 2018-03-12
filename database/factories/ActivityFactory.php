<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity::class, function (Faker $faker) {

    return [
        'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'type_id' => function () {
            return factory(App\Models\Type::class)->create()->id;
        },
        'resource_id' => function () use (&$r) {
            return factory(App\Models\Resource::class)->create()->id;
        },
    ];
});
