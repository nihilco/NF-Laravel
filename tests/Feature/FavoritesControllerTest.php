<?php

namespace Tests\Feature;

use Tests\TestCase;

class FavoritesControllerTest extends TestCase
{
    public $favorite;

    public function setUp()
    {
        parent::setUp();

        $thread = factory(\App\Models\Thread::class)->create();
        $reply = factory(\App\Models\Reply::class)->create([
            'resource_id' => $thread->id,
            'resource_type' => get_class($thread),
        ]);
        $this->favorite = factory(\App\Models\Favorite::class)->create([
            'resource_id' => $reply->id,
            'resource_type' => get_class($reply),
        ]);
    }
    
    public function test_a_guest_cannot_view_favorites()
    {
        $response = $this->get('/favorites');
        $response->assertStatus(302);
    }
    
    public function test_a_guest_cannot_favorite_a_reply()
    {
        $thread = factory(\App\Models\Thread::class)->create();
        $reply = factory(\App\Models\Reply::class)->create([
            'resource_id' => $thread->id,
            'resource_type' => get_class($thread),
        ]);
        
        $response = $this->post('/favorites', [
            'resource_id' => $reply->id,
            'resource_type' => get_class($reply),
        ]);
        
        $response->assertStatus(302);
    }
    
    public function test_a_user_can_favorite_a_reply()
    {
        $user = $this->login();
        
        $thread = factory(\App\Models\Thread::class)->create();
        $reply = factory(\App\Models\Reply::class)->create([
            'resource_id' => $thread->id,
            'resource_type' => get_class($thread),
        ]);
        
        $response = $this->post('/favorites', [
            'resource_id' => $reply->id,
            'resource_type' => get_class($reply),
        ]);
        
        $this->assertCount(1, $reply->favorites);
    }
    
    public function test_a_user_can_unfavorite_a_reply()
    {
        $user = $this->login();
        
        $thread = factory(\App\Models\Thread::class)->create();
        $reply = factory(\App\Models\Reply::class)->create([
            'resource_id' => $thread->id,
            'resource_type' => get_class($thread),
        ]);
        
        $response = $this->post('/favorites', [
            'resource_id' => $reply->id,
            'resource_type' => get_class($reply),
        ]);
        
        $response = $this->post('/favorites', [
            'resource_id' => $reply->id,
            'resource_type' => get_class($reply),
        ]);
        
        $this->assertCount(0, $reply->favorites);
    }

}
