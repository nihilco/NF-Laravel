<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Activity::class, function (Faker $faker) {

    $r = rand(1,1);

    return [
	'user_id' => function () {
	    return factory(App\Models\User::class)->create()->id;
	},
	'type' => '.created',
	'resource_id' => function () use (&$r) {
	    switch($r) {
	        case 1:
		default:
		    $ret = factory(App\Models\Thread::class)->create()->id;
		    break;
	    }
	    return $ret;
	},
	'resource_type' => function () use (&$r) {
	    switch($r) {
	        case 1:
		default:
		    $ret = App\Models\Thread::class;
		    break;
	    }
	    return $ret;
	},
    ];
});
