<?php

use Illuminate\Database\Seeder;

class CaseNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	foreach(\App\Models\ClientCase::where('account_id', 38)->get() as $case) {
	    for($i = 1; $i <= rand(3,10); $i++) {
	        factory(App\Models\CaseNote::class)->create([
	            'creator_id' => 1,
	            'owner_id' => 1,
		    'account_id' => 38,
		    'case_id' => $case->id,
		    'created_at' => \Carbon\Carbon::now()->addSeconds($i),
		    'updated_at' => \Carbon\Carbon::now()->addSeconds($i),
	        ]);
	    }
	}
    }
}