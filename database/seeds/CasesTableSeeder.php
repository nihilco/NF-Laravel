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
        foreach(\App\Models\Client::where('account_id', 38)->get() as $client) {
            $r = rand(2,4);
	    for($i = 1; $i <= $r; $i++) {
	        factory(App\Models\ClientCase::class)->create([
	            'creator_id' => 1,
	            'owner_id' => 1,
	            'account_id' => 38,
	            'client_id' => $client->id,
		    'date_settled_at' => (($r > 2) && ($i < ($r))) ? \Carbon\Carbon::now() : null,
	        ]);
	    }
	}
    }
}