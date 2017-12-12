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
	    'name' => 'Uriah',
	    'username' => 'uclemmer',
	    'email' => 'uriah@nihil.co',
	    'birthday' => '1987/09/22',
	    'password' => '$2y$10$CdT2ADBWBObWxeI4MaEmn.xPADMhk5zaquLt/QS//SXwHHvPH2yde',
	]);

	// Ella Chedburn
	factory(\App\Models\User::class)->create([
	    'name' => 'Ella',
	    'username' => 'echedburn',
	    'email' => 'echedburn@gmail.com',
	    'birthday' => '1996-07-15',
	    'password' => bcrypt('Uriah'),
	]);

	// Chandler Maze
	factory(\App\Models\User::class)->create([
	    'name' => 'Chandler',
	    'username' => 'cmaze',
	    'email' => 'chandler@mazestonelaw.com',
	    'birthday' => '1989-07-09',
	    'password' => '$2y$10$KWPiUiQk170cZrVcGBOlcuNV/0jkltuA6y38pp1hfcv01IQ9oOAgW',
	]);

	// Clayton Stone
	factory(\App\Models\User::class)->create([
	    'name' => 'Clayton',
	    'username' => 'Wcstone87',
	    'email' => 'clayton@mazestonelaw.com',
	    'birthday' => '1987-11-28',
	    'password' => '$2y$10$DcJ1JTceYbj6UUNQgylvBe5h4n7Uq7K5oBROdS1vRJDGnMu5WkQ1q',
	]);
    }
}
