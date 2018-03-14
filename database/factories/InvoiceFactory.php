<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Invoice::class, function (Faker $faker) {

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
        'type_id' => function () {
            return factory(App\Models\Type::class)->create()->id;
        },
        'status_id' => function () {
            return factory(App\Models\Status::class)->create()->id;
        },
        'slug' => str_random(16),
        'total_items' => 0,
        'tax_rate' => 0,
        'tax' => 0,
        'shipping' => 0,
        'total' => 0,
        'due_at' => \Carbon\Carbon::now(),
    ];
});
