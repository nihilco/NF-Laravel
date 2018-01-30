<?php

use Illuminate\Database\Seeder;

class CountriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	factory(App\Models\Country::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'code' => 'US',
	    'name' => 'United States',
	]);
    }
}
