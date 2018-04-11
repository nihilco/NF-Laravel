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
        //foreach(\App\Models\Client::where('account_id', 38)->get() as $client) {
        //    $r = rand(2,4);
        //    for($i = 1; $i <= $r; $i++) {
        //        factory(App\Models\ClientCase::class)->create([
        //            'creator_id' => 1,
        //            'owner_id' => 1,
        //            'account_id' => 38,
        //            'client_id' => $client->id,
        //	    'date_settled_at' => (($r > 2) && ($i < ($r))) ? \Carbon\Carbon::now() : null,
        //        ]);
        //    }
        //}

        factory(App\Models\ClientCase::class)->create([
            'creator_id' => 1,
            'owner_id' => 3,
            'client_id' => 1,
            'case_type_id' => 5,
            'name' => 'Montgomery',
            'description' => 'DUI at Cattleman\'s. DUI Second. Refusal Aggravated.',
            'date_settled_at' => \Carbon\Carbon::now(),
        ]);

        //factory(App\Models\ClientCase::class)->create([
        //    'creator_id' => 1,
        //    'owner_id' => 3,
        //    'client_id' => 3,
        //    'case_type_id' => 1,
        //    'name' => 'Montgomery',
        //    'description' => 'Big case description.',
        //    'date_settled_at' => null,
        //]);        
    }
}
