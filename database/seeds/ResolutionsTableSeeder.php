<?php

use Illuminate\Database\Seeder;

class ResolutionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $r1 = factory('App\Models\Resolution')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Unresolved',
            'slug' => 'unresolved',
            'description' => 'No solution has been discovered for the issue at this time; this issue is unresolved.',
        ]);
        
        $r2 = factory('App\Models\Resolution')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Resolved',
            'slug' => 'resolved',
            'description' => 'This issue is resolved - a solution has been found for this issue.',
        ]);
        
        $r3 = factory('App\Models\Resolution')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Needs More Info',
            'slug' => 'needs-more-info',
            'description' => 'What is going on here?  We need more information to diagnose this issue.',
        ]);
        
        $r4 = factory('App\Models\Resolution')->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'name' => 'Duplicate',
            'slug' => 'duplicate',
            'description' => 'This issue is a duplicate of a previously submitted issue.  Please refer back to the parent issue for more details.',
        ]);
    }
}
