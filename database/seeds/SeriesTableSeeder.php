<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $s1 = factory('App\Models\Series')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'name' => 'The Demon Cycle',
            'slug' => 'the-demon-cycle',
            'description' => '',
            'books_in_series' => 5,
        ]);

        $s2 = factory('App\Models\Series')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
            'name' => 'The Maze Runner',
            'slug' => 'the-maze-runner',
            'description' => '',
            'books_in_series' => 4,
        ]);

	$s3 = factory('App\Models\Series')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'The 13th Reality',
	    'slug' => 'the-13th-reality',
	    'description' => '',
	    'books_in_series' => 4,
	]);

        $s4 = factory('App\Models\Series')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'Pendergast',
	    'slug' => 'pendergast',
	    'description' => '',
	    'books_in_series' => 13,
	]);

        $s5 = factory('App\Models\Series')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'Gideon Crew',
	    'slug' => 'gideon-crew',
	    'description' => '',
	    'books_in_series' => 2,
	]);

        $s6 = factory('App\Models\Series')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'The Sword of Truth',
	    'slug' => 'the-sword-of-truth',
	    'description' => '',
	    'books_in_series' => 5,
	]);

        $s7 = factory('App\Models\Series')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'Dresden Files',
	    'slug' => 'dresden-files',
	    'description' => '',
	    'books_in_series' => 13,
	]);

        $s8 = factory('App\Models\Series')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'The Codex Alera',
	    'slug' => 'the-codex-alera',
	    'description' => '',
	    'books_in_series' => 6,
	]);

        $s9 = factory('App\Models\Series')->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'The Old Kingdom',
	    'slug' => 'the-old-kingdom',
	    'description' => '',
	    'books_in_series' => 5,
	]);
									    
    }
}
