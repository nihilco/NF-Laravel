<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'The NIHIL Corporation',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Uriah M. Clemmer IV',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'EST Prints',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'The Shirlock Foundation',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Nancy Clemmer',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Chris Clemmer',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'UTK Delts',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Taraloka Foundation',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Antiquarians',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Ben Hollerbach',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Hollerbach & Tompkins LLC.',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Tim Williams',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Encore',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Just Peachy Pictures',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'First American Commercial Property Group',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Pathrise',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'weScore',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Katharine Freeman',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Tisdale Construction',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'David Cross',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Ternion Athletics',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Tate Township',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Vince Bianco',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Lexander Farm',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Lucy Coppedge',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Bethel-Tate Fire Department',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Subway',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Sushi Nabe',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Coast-to-Coast College Fair',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Case Antiques',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Flagstick Partners',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Blue Springs Historical Association',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'La Qhia',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Maze & Stone PLLC.',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Ella Chedburn',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'business',
	    'name' => 'Green Product Junkie',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Kate Gribbin',
	]);

	factory(App\Models\Customer::class)->create([
	    'creator_id' => 1,
	    //'owner_id' => 1,
	    'type' => 'individual',
	    'name' => 'Jen Clemmer',
	]);
    }
}
