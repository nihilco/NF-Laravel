<?php

use Illuminate\Database\Seeder;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
	$notifications = factory(App\Models\Channel::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'Notifications Forum',
	    'slug' => 'notifications',
	    'description' => 'Notifications forum.',
	]);

	$general = factory(App\Models\Channel::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'General Forum',
	    'slug' => 'general',
	    'description' => 'General forum.',
	]);

	$nonrelated = factory(App\Models\Channel::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'Non-Related Forum',
	    'slug' => 'nonrelated',
	    'description' => 'Non-related forum.',
	]);

	$support = factory(App\Models\Channel::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'Support Forum',
	    'slug' => 'support',
	    'description' => 'Support forum.',
	]);

    }
}
