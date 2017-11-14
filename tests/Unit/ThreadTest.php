<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ThreadTest extends TestCase
{
    public $thread;

    public function setUp()
    {
        parent::setUp();

	$this->thread = factory(\App\Models\Thread::class)->create();
    }

    public function test_a_thread_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->thread->owner);
    }

    public function test_a_thread_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->thread->creator);
    }

    public function test_a_thread_has_a_forum()
    {
        $this->assertInstanceOf(\App\Models\Forum::class, $this->thread->forum);
    }

    public function test_a_thread_has_replies()
    {
        $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $this->thread->replies);
    }
}
