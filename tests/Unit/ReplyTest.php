<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ReplyTest extends TestCase
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
    
    public function test_a_reply_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->reply->owner);
    }

    public function test_a_reply_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->reply->creator);
    }

    public function test_a_reply_has_resource()
    {
        $this->assertInstanceOf($this->reply->resource_type, $this->reply->resource);
    }
}
