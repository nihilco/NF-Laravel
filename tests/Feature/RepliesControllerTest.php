<?php

namespace Tests\Feature;

use Tests\TestCase;

class RepliesControllerTest extends TestCase
{
    public $reply;

    public function setUp()
    {
        parent::setUp();

	$this->reply = factory(\App\Models\Reply::class)->create();
    }

    public function test_a_guest_cannot_view_replies()
    {
	$response = $this->get('/replies');
	$response->assertStatus(302);
    }

    public function test_a_guest_can_view_a_reply()
    {
	$response = $this->get($this->reply->path());
	$response->assertSee($this->reply->content);
    }
}
