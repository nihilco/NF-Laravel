<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Uriah Clemmer
	factory(\App\Models\User::class)->create([
        'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'Uriah Clemmer',
	    'username' => 'uriah.clemmer@nihil.co',
	    'email' => 'uriah@nihil.co',
	    'birthday' => '1987/09/22',
	    'password' => '$2y$10$CdT2ADBWBObWxeI4MaEmn.xPADMhk5zaquLt/QS//SXwHHvPH2yde',
	]);

	// Ella Chedburn
	factory(\App\Models\User::class)->create([
        'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'Ella Chedburn',
	    'username' => 'ella.chedburn@echedburn.com',
	    'email' => 'echedburn@gmail.com',
	    'birthday' => '1996-07-15',
	    'password' => bcrypt('Uriah'),
	]);

	// Chandler Maze
	factory(\App\Models\User::class)->create([
        'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'Chandler Maze',
	    'username' => 'chandler.maze@mazestonelaw.com',
	    'email' => 'chandler@mazestonelaw.com',
	    'birthday' => '1989-07-09',
	    'password' => '$2y$10$KWPiUiQk170cZrVcGBOlcuNV/0jkltuA6y38pp1hfcv01IQ9oOAgW',
	]);

	// Clayton Stone
	factory(\App\Models\User::class)->create([
        'creator_id' => 1,
	    'owner_id' => 1,
	    'name' => 'Clayton Stone',
	    'username' => 'clayton.stone@mazestonelaw.com',
	    'email' => 'clayton@mazestonelaw.com',
	    'birthday' => '1987-11-28',
	    'password' => '$2y$10$DcJ1JTceYbj6UUNQgylvBe5h4n7Uq7K5oBROdS1vRJDGnMu5WkQ1q',
	]);
    }
}
