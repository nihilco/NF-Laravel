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
        // The 13th Reality
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'The 13th Reality',
            'slug' => 'the-13th-reality',
            'description' => '',
            'books_in_series' => 4,
        ]);

        // The Codex Alera
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'The Codex Alera',
            'slug' => 'the-codex-alera',
            'description' => '',
            'books_in_series' => 6,
        ]);
        
        // The Demon Cycle
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'The Demon Cycle',
            'slug' => 'the-demon-cycle',
            'description' => '',
            'books_in_series' => 5,
        ]);

        // Dresden Files
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Dresden Files',
            'slug' => 'dresden-files',
            'description' => '',
            'books_in_series' => 13,
        ]);

        // Gideon Crew
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Gideon Crew',
            'slug' => 'gideon-crew',
            'description' => '',
            'books_in_series' => 2,
        ]);

        // The Maze Runner
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Lightbringer',
            'slug' => 'lightbringer',
            'description' => '',
            'books_in_series' => 5,
        ]);

        // The Maze Runner
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'The Maze Runner',
            'slug' => 'the-maze-runner',
            'description' => '',
            'books_in_series' => 4,
        ]);

        // Mistborn
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Mistborn',
            'slug' => 'mistborn',
            'description' => '',
            'books_in_series' => 3,
        ]);

        // The Old Kingdom
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'The Old Kingdom',
            'slug' => 'the-old-kingdom',
            'description' => '',
            'books_in_series' => 5,
        ]);

        // Pendergrast
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Pendergast',
            'slug' => 'pendergast',
            'description' => '',
            'books_in_series' => 13,
        ]);

        // The Reckoners
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'The Reckoners',
            'slug' => 'the-reckoners',
            'description' => '',
            'books_in_series' => 3,
        ]);
        
        // The Sword of Truth
        factory('App\Models\Series')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'The Sword of Truth',
            'slug' => 'the-sword-of-truth',
            'description' => '',
            'books_in_series' => 5,
        ]);
		
    }
}
