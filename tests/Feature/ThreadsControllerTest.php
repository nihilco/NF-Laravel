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
}
