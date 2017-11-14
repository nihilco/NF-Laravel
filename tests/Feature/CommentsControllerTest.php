<?php

namespace Tests\Feature;

use Tests\TestCase;

class CommentsControllerTest extends TestCase
{
    public $comment;

    public function setUp()
    {
        parent::setUp();

	$this->comment = factory(\App\Models\Comment::class)->create();
    }

    public function test_a_guest_cannot_view_comments()
    {
	$response = $this->get('/comments');
	$response->assertStatus(302);
    }
}
