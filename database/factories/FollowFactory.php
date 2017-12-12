<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Follow::class, function (Faker $faker) {

    $r = rand(1,1);

    return [
    	'creator_id' => 1,
	'owner_id' => 1,
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
