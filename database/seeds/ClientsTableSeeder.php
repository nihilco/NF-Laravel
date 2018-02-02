
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
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'account_id' => 33,
	]);

	factory(App\Models\Client::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'account_id' => 33,
	]);

	factory(App\Models\Client::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'account_id' => 33,
	]);
    }
}
