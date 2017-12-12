<?php

namespace Tests\Feature;

use Tests\TestCase;

class RepliesControllerTest extends TestCase
{
    public $reply;

    public function setUp()
    {
        parent::setUp();
	
	$thread = factory(\App\Models\Thread::class)->create();
	$this->reply = factory(\App\Models\Reply::class)->create([
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);
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

    public function test_an_unauthorized_user_cannot_delete_replies()
    {
	$thread = factory(\App\Models\Thread::class)->create();
	$reply = factory(\App\Models\Reply::class)->create([
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$response = $this->delete($reply->path());
	$response->assertStatus(302);

	$user = $this->login();
	$response = $this->delete($reply->path());
	$response->assertStatus(403);
    }

    public function test_an_authorized_user_can_delete_replies()
    {
	$user = $this->login();

	$thread = factory(\App\Models\Thread::class)->create();
	$reply = factory(\App\Models\Reply::class)->create([
	    'owner_id' => $user->id,
	    'creator_id' => $user->id,
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),	    
	]);

	$response = $this->delete($reply->path());
	$response->assertStatus(302);
	$this->assertDatabaseMissing('replies', $reply->makeHidden('isFavorited')->toArray());
    }

    public function test_an_unauthorized_user_cannot_update_replies()
    {
	$thread = factory(\App\Models\Thread::class)->create();
	$reply = factory(\App\Models\Reply::class)->create([
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$newContent = 'New reply content.';

	$response = $this->patch($reply->path(), ['content' => $newContent]);
	$response->assertStatus(302);

	$user = $this->login();
	$response = $this->patch($reply->path(), ['content' => $newContent]);
	$response->assertStatus(403);
    }

    public function test_authorized_users_can_update_replies()
    {
        $user = $this->login();

	$thread = factory(\App\Models\Thread::class)->create();
	$reply = factory(\App\Models\Reply::class)->create([
	    'owner_id' => $user->id,
	    'creator_id' => $user->id,
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$newContent = 'New reply content.';

	$response = $this->patch($reply->path(), ['content' => $newContent]);

	$this->assertDatabaseHas('replies', ['id' => $reply->id, 'content' => $newContent]);
    }

    public function test_a_guest_can_request_all_replies_for_a_thread()
    {
        $thread = factory(\App\Models\Thread::class)->create();
	$reply1 = factory(\App\Models\Reply::class)->create([
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);
	$reply2 = factory(\App\Models\Reply::class)->create([
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);

	$response = $this->getJson('/replies/list?resource_id=' . $thread->id . '&resource_type=' . get_class($thread))->json();

	$this->assertCount(2, $response['data']);
	$this->assertEquals(2, $response['total']);
    }
}
