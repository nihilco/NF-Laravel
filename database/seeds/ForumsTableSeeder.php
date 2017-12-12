<?php

use Illuminate\Database\Seeder;

class ForumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	$channels = \App\Models\Channel::all();
	
        //
	$news = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'channel_id' => $channels->where('title', 'Notifications Forum')->first()->id,
	    'title' => 'News',
	    'slug' => 'news',
	    'description' => 'News forum.',
	]);

	$patches = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'channel_id' => $channels->where('title', 'Notifications Forum')->first()->id,
	    'title' => 'Patches',
	    'slug' => 'patches',
	    'description' => 'Patches forum.',
	]);

	$faqs = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'channel_id' => $channels->where('title', 'Support Forum')->first()->id,
	    'title' => 'FAQs',
	    'slug' => 'faqs',
	    'description' => 'FAQs forum.',
	]);

	$support = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'channel_id' => $channels->where('title', 'Support Forum')->first()->id,
	    'title' => 'Guides',
	    'slug' => 'guides',
	    'description' => 'Guides forum.',
	]);

    }
}
