<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(App\Models\Client::class)->create([
	    'name' => 'The NIHIL Corporation',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Uriah M. Clemmer IV',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'EST Prints',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'The Shirlock Foundation',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Nancy Clemmer',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Chris Clemmer',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'UTK Delts',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Taraloka Foundation',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Antiquarians',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Ben Hollerbach',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Hollerbach & Tompkins LLC.',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Tim Williams',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Encore',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Just Peachy Pictures',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'First American Commercial Property Group',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Pathrise',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'weScore',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Katharine Freeman',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Tisdale Construction',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'David Cross',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Ternion Athletics',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Tate Township',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Vince Bianco',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Lexander Farms',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Lucy Coppedge',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Bethel-Tate Fire Department',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Subway',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Sushi Nabe',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Coast-to-Coast College Fair',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Case Antiques',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Flagstick Partners',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Blue Springs Historical Association',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'La Qhia',
	]);

	factory(App\Models\Client::class)->create([
	    'name' => 'Maze & Stone PLLC.',
	]);
    }
}
