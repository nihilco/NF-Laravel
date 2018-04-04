<?php

namespace Tests\Feature;

use Tests\TestCase;

class RepliesControllerTest extends TestCase
{
    public $reply;

    public function setUp()
    {
        parent::setUp();
    }
    
    public function test_a_guest_cannot_view_replies()
    {
        $response = $this->get('/replies');
        $response->assertStatus(302);
    }
}
