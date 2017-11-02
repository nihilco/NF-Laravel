<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Account::class, function (Faker $faker) {

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
	'name' => $faker->words(rand(2, 5), true),
	'description' => $faker->paragraph(rand(3, 6)),
	'stripe_id' => 'cus_000000000000',
	'secret_key' => 'sk_' . str_random(29),
	'publishable_key' => 'pk_' . str_random(29),
    ];
});
