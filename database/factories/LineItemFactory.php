<?php

use Faker\Generator as Faker;

$factory->define(App\Models\LineItem::class, function (Faker $faker) {

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
        'product_id' => function () {
            return factory(App\Models\Product::class)->create()->id;
        },
        'quantity' => rand(1,10),
        'unit_price' => rand(100,100000),
        'subtotal' => rand(100,1000000),
    ];
});
