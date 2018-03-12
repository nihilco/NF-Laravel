<?php

namespace Tests\Feature;

use Tests\TestCase;

class PostsControllerTest extends TestCase
{
    public $blogPost;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->blogPost = factory(\App\Models\Post::class)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_guest_can_view_a_post()
    {
        $response = $this->get($this->blogPost->path());

        $response->assertSee($this->blogPost->title);
    }

    public function test_a_guest_can_view_replies_for_a_post()
    {
        $reply = factory(\App\Models\Reply::class)->create([
            'resource_id' => $this->blogPost->id,
            'resource_type' => get_class($this->blogPost),
        ]);
        
        $response = $this->get('/posts/'. $this->blogPost->id);
        
        $response->assertSee($reply->content);
    }
    
    public function test_a_user_can_reply_on_a_post()
    {
        $user = $this->login();
        
        $reply = factory(\App\Models\Reply::class)->make([
            'creator_id' => $user->id,
            'owner_id' => $user->id,
            'resource_id' => $this->blogPost->id,
            'resource_type' => \App\Models\Post::class,
        ]);
        
        $this->post($this->blogPost->path() . '/replies', $reply->toArray());
        
        $response = $this->get($this->blogPost->path());
        
        $response->assertSee($reply->content);
    }

}
