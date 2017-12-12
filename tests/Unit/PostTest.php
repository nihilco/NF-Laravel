<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PostTest extends TestCase
{
    public $post;

    public function setUp()
    {
        parent::setUp();

	$this->post = factory(\App\Models\Post::class)->create();
    }

    public function test_a_post_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->post->owner);
    }

    public function test_a_post_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->post->creator);
    }

    public function test_a_post_has_replies()
    {
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $this->post->replies);
    }
}
