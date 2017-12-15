<?php

use Illuminate\Database\Seeder;

class AliasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(\App\Models\Alias::class)->create([
	    'source' => 'uriah@nihil.co',
	    'destination' => 'uriah.clemmer@nihil.co',
	]);

        //
	factory(\App\Models\Alias::class)->create([
	    'source' => 'uclemmer@nihil.co',
	    'destination' => 'uriah.clemmer@nihil.co',
	]);
    }
}
