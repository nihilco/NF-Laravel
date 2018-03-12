<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Customer::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'owner_id' => function () {
            return factory(App\Models\User::class)->create()->id;
        },
        'account_id' => function () {
            return factory(App\Models\Account::class)->create()->id;
        },
        'type_id' => function () {
            return factory(App\Models\Type::class)->create(['model' => App\Models\Customer::class])->id;
        },
        'stripe_id' => 'cus_' . str_random(12),
        'name' => $faker->company,
        'description' => $faker->paragraph(rand(3, 6)),
        'billing_address_id' => function () {
            return factory(App\Models\Address::class)->create()->id;
        },
        'shipping_address_id' => function () {
            return factory(App\Models\Address::class)->create()->id;
        },
    ];
});
