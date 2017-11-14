<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Record::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'zone_id' => function () {
	    return factory(App\Models\Zone::class)->create()->id;
	},
	'type_id' => function () {
	    return factory(App\Models\Type::class)->create()->id;
	},
	'name' => $faker->word,
	'value' => $faker->word,
	'ttl' => 3600,
    ];
});
