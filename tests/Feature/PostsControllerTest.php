<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostsControllerTest extends TestCase
{
    use DatabaseMigrations;

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
    public function test_a_user_can_view_all_posts()
    {	
        $response = $this->get('/posts');

	$response->assertSee($this->post->title);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_view_a_post()
    {
        $response = $this->get('/posts/' . $this->post->id);

	$response->assertSee($this->post->title);
    }

    //public function test_a_user_can_read_comments_associated_with_a_post()
    //{
    //    $comment = factory(\App\Models\Comment::class)->create([
    //	    'resource_id' => $this->post->id,
    //	    'resource_type' => \App\Models\Post::class,
    //	]);
    //
    //    $response = $this->get('/posts/' . $this->post->id);
    //
    //	$response->assertSee($comment->content);
    //}
}
