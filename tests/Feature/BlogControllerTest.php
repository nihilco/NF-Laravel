<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BlogControllerTest extends TestCase
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
    public function test_a_user_can_view_blogroll()
    {	
        $response = $this->get('/blog');

	$response->assertSee($this->post->title);
    }

}
