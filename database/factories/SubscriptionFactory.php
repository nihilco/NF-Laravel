<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Subscription::class, function (Faker $faker) {

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
        'plan_id' => function () {
            return factory(App\Models\Plan::class)->create()->id;
        },
        'start_at' => \Carbon\Carbon::now()->toDateTimeString(),
    ];
});
