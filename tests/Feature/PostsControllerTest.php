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
    public function test_a_guest_cannot_view_a_post()
    {
        $response = $this->get('/posts');
        $response->assertStatus(302);
    }
}
