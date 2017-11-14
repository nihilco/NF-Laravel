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
        //
	$notifications = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'Notifications Forum',
	    'slug' => 'notifications',
	    'description' => 'Notifications forum.',
	]);

	$news = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'parent_id' => $notifications->id,
	    'title' => 'News',
	    'slug' => 'news',
	    'description' => 'News forum.',
	]);

	$patches = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'parent_id' => $notifications->id,
	    'title' => 'Patches',
	    'slug' => 'patches',
	    'description' => 'Patches forum.',
	]);

	$general = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'General Forum',
	    'slug' => 'general',
	    'description' => 'General forum.',
	]);

	$nonrelated = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'Non-Related Forum',
	    'slug' => 'nonrelated',
	    'description' => 'Non-related forum.',
	]);

	$support = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'title' => 'Support Forum',
	    'slug' => 'support',
	    'description' => 'Support forum.',
	]);

	$faqs = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'parent_id' => $support->id,
	    'title' => 'FAQs',
	    'slug' => 'faqs',
	    'description' => 'FAQs forum.',
	]);

	$support = factory(App\Models\Forum::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'parent_id' => $support->id
	    'title' => 'Guides',
	    'slug' => 'guides',
	    'description' => 'Guides forum.',
	]);

    }
}
