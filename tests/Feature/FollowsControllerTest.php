<?php

namespace Tests\Feature;

use Tests\TestCase;

class FollowsControllerTest extends TestCase
{
    public $follow;

    public function setUp()
    {
        parent::setUp();
	
	$thread = factory(\App\Models\Thread::class)->create();
	$this->follow = factory(\App\Models\Follow::class)->create([
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);
    }

    public function test_a_guest_cannot_view_follows()
    {
	$response = $this->get('/follows');
	$response->assertStatus(302);
    }

    public function test_a_guest_cannot_view_a_follow()
    {
	$response = $this->get($this->follow->path());
	$response->assertStatus(302);
    }

    public function test_an_user_can_follow_a_thread()
    {
	$user = $this->login();

        $thread = factory(\App\Models\Thread::class)->create();

	$response = $this->post('/follows', [
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$this->assertCount(1, $thread->follows);
    }

    public function test_an_user_can_unfollow_a_thread()
    {
	$user = $this->login();

        $thread = factory(\App\Models\Thread::class)->create();

	$response = $this->post('/follows', [
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$this->assertCount(1, $thread->follows);

	$response = $this->post('/follows', [
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$this->assertCount(0, $thread->fresh()->follows);
    }

    public function test_an_user_receives_a_notification_when_there_is_a_reply_to_a_followed_thread()
    {
	$user = $this->login();

        $thread = factory(\App\Models\Thread::class)->create();

	$response = $this->post('/follows', [
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$this->assertCount(1, $thread->follows);

	$this->assertCount(0, auth()->user()->notifications);

	$reply = factory(\App\Models\Reply::class)->create([
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$this->assertCount(1, auth()->user()->fresh()->notifications);
    }
}
