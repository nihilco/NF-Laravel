<?php

use Illuminate\Database\Seeder;

class LotteriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(App\Models\Client::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 3,
	    'name' => 'Powerball',
	    'description' => 'National Powerball lottery.',
	]);

	factory(App\Models\Client::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 3,
	    'name' => 'Mega Millions',
	    'description' => 'National Mega Millions lottery.',
	]);
    }
}
