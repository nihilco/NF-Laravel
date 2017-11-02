<?php

use Illuminate\Database\Seeder;

class StatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$s1 = factory('App\Models\Status')->create([
            'creator_id' => 1,
	    'owner_id' => 1,
            'name' => 'New',
            'slug' => 'new',
            'description' => 'This is a newly reported issue and is awaiting processing and assignment.',
        ]);

        $s2 = factory('App\Models\Status')->create([
            'creator_id' => 1,
	    'owner_id' => 1,
            'name' => 'Fixed',
            'slug' => 'fixed',
            'description' => 'Action has been taken to correct this issue which is awaiting reporter verification.',
        ]);

        $s3 = factory('App\Models\Status')->create([
            'creator_id' => 1,
	    'owner_id' => 1,
            'name' => 'In Progress',
            'slug' => 'in-progress',
            'description' => 'The issue is actively being worked on.',
        ]);

        $s4 = factory('App\Models\Status')->create([
            'creator_id' => 1,
	    'owner_id' => 1,
            'name' => 'Reopened',
            'slug' => 'reopened',
            'description' => 'If a previous resolution fails, the issue is reassigned and reopened.',
        ]);

        $s5 = factory('App\Models\Status')->create([
            'creator_id' => 1,
	    'owner_id' => 1,
            'name' => 'Open',
            'slug' => 'open',
            'description' => 'The issue has been assigned, opened, and is ready for the assignee to start work.',
        ]);

        $s6 = factory('App\Models\Status')->create([
            'creator_id' => 1,
	    'owner_id' => 1,
            'name' => 'Closed',
            'slug' => 'closed',
            'description' => 'This issue is considered finished; the resolution is correct.',

        ]);
    }
}
