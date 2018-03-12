<?php

use Illuminate\Database\Seeder;

class TopicsTableSeeder extends Seeder
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
        $news = factory(App\Models\Topic::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'channel_id' => $channels->where('title', 'Notifications Channel')->first()->id,
            'title' => 'News',
            'slug' => 'news',
            'description' => 'News topic.',
        ]);
        
        $patches = factory(App\Models\Topic::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'channel_id' => $channels->where('title', 'Notifications Channel')->first()->id,
            'title' => 'Patches',
            'slug' => 'patches',
            'description' => 'Patches topic.',
        ]);
        
        $faqs = factory(App\Models\Topic::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'channel_id' => $channels->where('title', 'Support Channel')->first()->id,
            'title' => 'FAQs',
            'slug' => 'faqs',
            'description' => 'FAQs topic.',
        ]);
        
        $support = factory(App\Models\Topic::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'channel_id' => $channels->where('title', 'Support Channel')->first()->id,
            'title' => 'Guides',
            'slug' => 'guides',
            'description' => 'Guides topic.',
        ]);
    }
}
