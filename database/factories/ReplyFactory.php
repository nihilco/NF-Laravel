<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Reply::class, function (Faker $faker) {

    $r = rand(1,1);

    return [
    	'creator_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'owner_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'resource_id' => function () use (&$r) {
	    switch($r) {
	        case 1:
		default:
		    $ret = factory(App\Models\Issue::class)->create()->id;
		    break;
	    }
	    return $ret;
	},
	'resource_type' => function () use (&$r) {
	    switch($r) {
	        case 1:
		default:
		    $ret = App\Models\Issue::class;
		    break;
	    }
	    return $ret;
	},
	'content' => $faker->paragraph(rand(3,6), true),
    ];
});
