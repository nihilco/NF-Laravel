<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Order::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'customer_id' => function () {
            return factory(App\Models\Customer::class)->create()->id;
        },
        'status_id' => function () {
            return factory(App\Models\Status::class)->create()->id;
        },
        'slug' => str_random(16),
        'total_items' => 0,
    ];
});
