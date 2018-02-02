<?php

use Illuminate\Database\Seeder;

class CasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(\App\Models\Client::where('account_id', 33)->get() as $client) {
	    for($i = 1; $i <= rand(1,3); $i++) {
	        factory(App\Models\ClientCase::class)->create([
	            'creator_id' => 1,
	            'owner_id' => 1,
	            'account_id' => 33,
	            'client_id' => $client->id,
	        ]);
	    }
	}
    }
}
