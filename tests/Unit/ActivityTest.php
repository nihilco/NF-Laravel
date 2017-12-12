<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ActivityTest extends TestCase
{
    public function test_it_records_activity_when_a_thread_is_created()
    {
        $this->login();

        $thread = factory(\App\Models\Thread::class)->create();

	$this->assertDatabaseHas('activities', [
	    'user_id' => auth()->id(),
	    'type' => 'threads.created',
	    'resource_id' => $thread->id,
	    'resource_type' => get_class($thread),
	]);
    }

    public function test_it_records_activity_when_a_reply_is_created()
    {
        $this->login();

	$thread = factory(\App\Models\Thread::class)->create();
        $reply = factory(\App\Models\Reply::class)->create(['resource_id' => $thread->id, 'resource_type' => get_class($thread)]);

	$this->assertDatabaseHas('activities', [
	    'user_id' => auth()->id(),
	    'type' => 'replies.created',
	    'resource_id' => $reply->id,
	    'resource_type' => get_class($reply),
	]);

	$this->assertDatabaseHas('activities', [
	    'user_id' => auth()->id(),
	    'type' => 'threads.created',
	    'resource_id' => $reply->resource->id,
	    'resource_type' => get_class($reply->resource),
	]);
    }

    public function test_it_fetches_a_feed_for_any_user()
    {
        $user = $this->login();

	factory(\App\Models\Thread::class, 2)->create(['creator_id' => auth()->id(), 'owner_id' => auth()->id()]);

	$first = auth()->user()->activity()->first();
	$first->created_at = \Carbon\Carbon::now()->subWeek()->toDateTimeString();
	$first->save();

	$feed = \App\Models\Activity::feed($user);

	$this->assertTrue($feed->keys()->contains(\Carbon\Carbon::now()->format('Y-m-d')));
	$this->assertTrue($feed->keys()->contains(\Carbon\Carbon::now()->subWeek()->format('Y-m-d')));
    }
}
