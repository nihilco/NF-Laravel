<?php

use Faker\Generator as Faker;

$factory->define(App\Models\Type::class, function (Faker $faker) {

    $r = rand(1,1);

    return [
        //
   	'creator_id' => 1,
	'owner_id' => 1,
	'parent_id' => null,	
	'resource_type' => function () use (&$r) {
	    switch($r) {
	        case 1:
		default:
		    $ret = App\Models\Issue::class;
		    break;
	    }
	    return $ret;
	},
	'name' => $faker->words(rand(2, 5), true),
	'slug' => $faker->slug,
	'description' => $faker->paragraph(rand(3, 6)),
    ];
    
});
