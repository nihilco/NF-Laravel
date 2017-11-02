<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Step::class, function (Faker $faker) {

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'tutorial_id' => function () {
	    return factory(App\Models\Tutorial::class)->create()->id;
        },
	'step_number' => 1,
    ];
});
