<?php

namespace Tests\Feature;

use Tests\TestCase;

class ThreadsControllerTest extends TestCase
{
    public $thread;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->thread = factory(\App\Models\Thread::class)->create();
    }

    public function test_a_guest_cannot_view_threads()
    {
        $response = $this->get('/threads');
        $response->assertStatus(302);
    }
    
    public function test_a_guest_can_view_a_thread()
    {
        $response = $this->get($this->thread->path());
        $response->assertSee($this->thread->title);
    }
    
    public function test_a_user_can_create_a_forum_thread()
    {
        $user = $this->login();
        
        $thread = factory(\App\Models\Thread::class)->make();
        
        $this->post('/threads', $thread->toArray());
        
        $response = $this->get($thread->forum->path());
        
        $response->assertSee($thread->title);
    }

    public function test_a_guest_cannot_create_a_forum_thread()
    {
        $thread = factory(\App\Models\Thread::class)->make();
        
        $response = $this->post('/threads', $thread->toArray());
        
        $response->assertStatus(302);
    }
    
    public function test_an_user_can_filter_threads_by_username()
    {
        $user = $this->login();
        
        $threadByUser = factory(\App\Models\Thread::class)->create(['owner_id' => $user->id]);
        $threadNotByUser = factory(\App\Models\Thread::class)->create();
        
        $response = $this->get('/threads?by=' . $user->name);
        $response->assertSee($threadByUser->title);
        $response->assertDontSee($threadNotByUser->title);
    }
    
    public function test_an_user_can_filter_threads_by_popularity()
    {
        $user = $this->login();
        
        $threadWithThreeReplies = factory(\App\Models\Thread::class)->create();
        factory(\App\Models\Reply::class, 3)->create([
            'resource_id' => $threadWithThreeReplies->id,
            'resource_type' => \App\Models\Thread::class,
        ]);
        
        $threadWithTwoReplies = factory(\App\Models\Thread::class)->create();
        factory(\App\Models\Reply::class, 2)->create([
            'resource_id' => $threadWithTwoReplies->id,
            'resource_type' => \App\Models\Thread::class,
        ]);
        
        $threadWithZeroReplies = $this->thread;
        
        $response = $this->getJson('/threads?popular=1')->json();
        
        $this->assertEquals([3,2,0], array_slice(array_column($response, 'replies_count'), 0, 3));	
    }

    public function test_an_user_can_filter_threads_by_unanswered()
    {
        $user = $this->login();
        
        $threadWithReplies = factory(\App\Models\Thread::class)->create();
        factory(\App\Models\Reply::class, 2)->create([
            'resource_id' => $threadWithReplies->id,
            'resource_type' => \App\Models\Thread::class,
        ]);
        
        $threadWithZeroReplies = $this->thread;
        
        $response = $this->getJson('/threads?unanswered=1')->json();
        
        $this->assertCount(7, $response);
    }
    
    public function test_an_unauthorized_user_cannot_delete_threads()
    {
        $thread = factory(\App\Models\Thread::class)->create();
        
        $response = $this->delete($thread->path());
        
        $response->assertStatus(302);
        
        $user = $this->login();
        
        $response = $this->delete($thread->path());
        
        $response->assertStatus(403);
    }
    
    public function test_an_authorized_user_can_delete_threads()
    {
        $user = $this->login(\App\Models\User::find(1));
        
        $thread = factory(\App\Models\Thread::class)->create();
        $reply = factory(\App\Models\Reply::class)->create(['resource_id' => $thread->id, 'resource_type' => get_class($thread)]);
        
        $response = $this->delete($thread->path());
        
        $response->assertStatus(302);
        
        $this->assertDatabaseMissing('threads', $thread->makeHidden('isFollowing')->toArray());
        $this->assertDatabaseMissing('replies', $reply->makeHidden('isFavorited')->toArray());
    }
    
    public function test_an_user_can_delete_thier_own_threads()
    {
        $user = $this->login();
        
        $thread = factory(\App\Models\Thread::class)->create(['creator_id' => auth()->id(), 'owner_id' => auth()->id()]);
        $reply = factory(\App\Models\Reply::class)->create(['resource_id' => $thread->id, 'resource_type' => get_class($thread)]);
        
        $response = $this->delete($thread->path());
        
        $response->assertStatus(302);
        
        $this->assertDatabaseMissing('threads', $thread->makeHidden('isFollowing')->toArray());
        $this->assertDatabaseMissing('replies', $reply->makeHidden('isFavorited')->toArray());
        $this->assertDatabaseMissing('activities', [
            'resource_id' => $thread->id,
            'resource_type' => get_class($thread),
        ]);
        $this->assertDatabaseMissing('activities', [
            'resource_id' => $reply->id,
            'resource_type' => get_class($reply),
        ]);
    }

}
