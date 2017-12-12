<?php

namespace Tests\Feature;

use Tests\TestCase;

class NotificationsControllerTest extends TestCase
{
    public $user;

    public function setUp()
    {
        parent::setUp();

	$this->user = $this->login();
    }

    public function test_a_notification_is_generated_when_there_is_a_reply_to_a_followed_thread_from_another_user()
    {
	$thread = factory(\App\Models\Thread::class)->create();

	$response = $this->post('/follows', [
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$this->assertCount(0, auth()->user()->notifications);

	$reply = factory(\App\Models\Reply::class)->create([
	    'creator_id' => $this->user->id,
	    'owner_id' => $this->user->id,
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$this->assertCount(0, auth()->user()->fresh()->notifications);

	$reply = factory(\App\Models\Reply::class)->create([
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$this->assertCount(1, auth()->user()->fresh()->notifications);
    }

    public function test_an_user_can_mark_a_notification_as_read()
    {
	$notification = factory(\Illuminate\Notifications\DatabaseNotification::class)->create();

	$this->assertCount(1, auth()->user()->fresh()->unreadNotifications);

	$nid = auth()->user()->unreadNotifications->first()->id;

	$response = $this->delete('/notifications/' . $nid);

	$this->assertCount(0, auth()->user()->fresh()->unreadNotifications);
    }

    public function test_an_user_can_get_their_notifications()
    {
	factory(\Illuminate\Notifications\DatabaseNotification::class, 3)->create();

	$nid = auth()->user()->unreadNotifications->first()->id;

	$response1 = $this->delete('/notifications/' . $nid);

	$this->assertCount(2, auth()->user()->fresh()->unreadNotifications);

	$response2 = $this->getJson('/notifications/list')->json();

	$this->assertCount(3, $response2);

	$response3 = $this->getJson('/notifications/list?read=1')->json();

	$this->assertCount(1, $response3);

	$response4 = $this->getJson('/notifications/list?unread=1')->json();

	$this->assertCount(2, $response4);
    }
}
