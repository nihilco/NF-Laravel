<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Vote::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'resource_id' => function () {
            return factory(App\Models\Resource::class)->create()->id;
        },
        'value' => rand(0,1) ? 'up' : 'down',
    ];
});
