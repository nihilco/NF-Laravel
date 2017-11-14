<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $websites = App\Models\Website::all();
	
        //
	$post1 = factory(App\Models\Post::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.uclemmer.com')->first()->id,
	    'title' => 'Welcome to the New Website',
	    'slug' => 'welcome-to-the-new-website',
	    'description' => 'Hello fiends!  Obviously, the new website is up and running now - it&quot;s been a long time coming.  Take a look around and be sure to leave some feedback.',
	    'content' => '',
	]);

	$post2 = factory(App\Models\Post::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.uclemmer.com')->first()->id,
	    'title' => 'How-to Make a Symlink',
	    'slug' => 'how-to-make-a-symlink',
	    'description' => 'Here is how to make a symlink on Ubuntu 16.04.',
	    'content' => '',
	]);

	$post3 = factory(App\Models\Post::class)->create([
	    'creator_id' => 1,
	    'owner_id' => 1,
	    'website_id' => $websites->where('hostname', 'www.uclemmer.com')->first()->id,
	    'title' => 'How To Make a Command Alias',
	    'slug' => 'how-to-make-a-command-alias',
	    'description' => 'Use command aliases to shorthand any of those actions you frequently use on your Ubuntu 16.04 server.',
	    'content' => '',
	]);
    }
}
