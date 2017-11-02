<?php

namespace Tests\Feature;

use Tests\TestCase;

class PostsControllerTest extends TestCase
{
    public $post;

    public function setUp()
    {
        parent::setUp();

	$this->post = factory(\App\Models\Post::class)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_guest_can_view_a_post()
    {
        $response = $this->get('/posts/' . $this->post->id);

	$response->assertSee($this->post->title);
    }

    public function test_a_guest_can_view_comments_for_a_post()
    {
	$comment = factory(\App\Models\Comment::class)->create([
	    'resource_id' => $this->post->id,
	    'resource_type' => \App\Models\Post::class,
	]);

	$response = $this->get('/posts/'. $this->post->id);

	$response->assertSee($comment->content);
    }

}
