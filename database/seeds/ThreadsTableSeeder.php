<?php

use Illuminate\Database\Seeder;

class ThreadsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $topics = \App\Models\Topic::all();

        factory(App\Models\Thread::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'topic_id' => $topics->where('title', 'News')->first()->id,
            'title' => 'Forums Now Open',
            'slug' => 'forums-now-open',
            'content' => 'The Forums are now open.  Discuss away.',
        ]);
        
        factory(App\Models\Thread::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'topic_id' => $topics->where('title', 'Patches')->first()->id,
            'title' => 'Version 1.0.0.0',
            'slug' => 'version-1-0-0-0',
            'content' => 'Patch version 1.0.0.0.',
        ]);
        
        factory(App\Models\Thread::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'topic_id' => $topics->where('title', 'Patches')->first()->id,
            'title' => 'Version 1.0.0.1',
            'slug' => 'version-1-0-0-1',
            'content' => 'Patch version 1.0.0.1.',
        ]);
        
        factory(App\Models\Thread::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'topic_id' => $topics->where('title', 'FAQs')->first()->id,
            'title' => 'How do I Create an Account?',
            'slug' => 'how-do-i-create-an-account',
            'content' => 'Here is how you create an account.',
        ]);
        
        factory(App\Models\Thread::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'topic_id' => $topics->where('title', 'FAQs')->first()->id,
            'title' => 'How Do I Verify My Email Address?',
            'slug' => 'how-do-i-verify-my-email-address',
            'content' => 'Here is how you verify your email address.',
        ]);
        
        factory(App\Models\Thread::class)->create([
            'creator_id' => 1,
            'owner_id' => 1,
            'topic_id' => $topics->where('title', 'Guides')->first()->id,
            'title' => 'A Guide on Guides',
            'slug' => 'a-guide-on-guides',
            'content' => 'Here is how to use the guides.',
        ]);
    }
}
