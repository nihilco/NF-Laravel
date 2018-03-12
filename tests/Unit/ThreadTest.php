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

    public function test_a_thread_has_a_topic()
    {
        $this->assertInstanceOf(\App\Models\Topic::class, $this->thread->topic);
    }

    //public function test_a_thread_has_replies()
    //{
    //    $this->assertInstanceOf(\Illuminate\Database\Eloquent\Collection::class, $this->thread->replies);
    //}

    //public function test_an_user_can_follow_a_thread()
    //{
    //    $user = $this->login();
    //
    //    $this->thread->follow();
    //    
    //    $this->assertEquals(1, $this->thread->follows()->where('owner_id', $user->id)->count());
    //}

    //public function test_an_user_can_unfollow_a_thread()
    //{
    //    $user = $this->login();
    //    
    //    $this->thread->follow();
    //
    //    $this->assertEquals(1, $this->thread->follows()->where('owner_id', $user->id)->count());
    //
    //    $this->thread->unfollow();
    //
    //    $this->assertCount(0, $this->thread->follows);
    //}
}
