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
        $response = $this->get('/posts/' . $this->blogPost->id);

	$response->assertSee($this->blogPost->title);
    }

    public function test_a_guest_can_view_comments_for_a_post()
    {
	$comment = factory(\App\Models\Comment::class)->create([
	    'resource_id' => $this->blogPost->id,
	    'resource_type' => \App\Models\Post::class,
	]);

	$response = $this->get('/posts/'. $this->blogPost->id);

	$response->assertSee($comment->content);
    }

    public function test_a_user_can_comment_on_a_post()
    {
	$user = $this->login();

	$comment = factory(\App\Models\Comment::class)->make([
	    'creator_id' => $user->id,
   	    'owner_id' => $user->id,
	    'resource_id' => $this->blogPost->id,
	    'resource_type' => \App\Models\Post::class,
	]);

	$this->post('/comments', $comment->toArray());

	$response = $this->get($this->blogPost->path());

	$response->assertSee($comment->content);
    }

}
