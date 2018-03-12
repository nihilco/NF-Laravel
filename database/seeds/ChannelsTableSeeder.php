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
            'title' => 'Notifications Channel',
            'slug' => 'notifications',
            'description' => 'Notifications channel.',
        ]);
        
        $general = factory(App\Models\Channel::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'title' => 'General Channel',
            'slug' => 'general',
            'description' => 'General channel.',
        ]);
        
        $nonrelated = factory(App\Models\Channel::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'title' => 'Non-Related Channel',
            'slug' => 'nonrelated',
            'description' => 'Non-related channel.',
        ]);
        
        $support = factory(App\Models\Channel::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'title' => 'Support Channel',
            'slug' => 'support',
            'description' => 'Support channel.',
        ]);

    }
}
