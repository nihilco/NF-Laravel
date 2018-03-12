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
        //foreach(\App\Models\ClientCase::where('account_id', 38)->get() as $case) {
        //    for($i = 1; $i <= rand(3,10); $i++) {
        //        factory(App\Models\CaseNote::class)->create([
        //            'creator_id' => 1,
        //            'owner_id' => rand(1,4),
        //	    'account_id' => 38,
        //	    'case_id' => $case->id,
        //	    'created_at' => \Carbon\Carbon::now()->addSeconds($i),
        //	    'updated_at' => \Carbon\Carbon::now()->addSeconds($i),
        //        ]);
        //    }
        //}

        $case = \App\Models\ClientCase::find(1);
        
        factory(App\Models\CaseNote::class)->create([
            'creator_id' => $case->creator_id,
            'owner_id' => $case->owner_id,
            'case_id' => 1,
            'content' => 'Pretrial March 5 at 10:00',
            'created_at' => \Carbon\Carbon::now()->addSeconds(1),
            'updated_at' => \Carbon\Carbon::now()->addSeconds(1),
        ]);
    }
}
