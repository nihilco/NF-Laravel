<?php

namespace Tests\Feature;

use Tests\TestCase;

class BlogControllerTest extends TestCase
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
    public function test_a_guest_can_view_blogroll()
    {	
        $response = $this->get('/blog');

	$response->assertSee($this->post->title);
    }

}
