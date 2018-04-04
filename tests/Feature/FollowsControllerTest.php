<?php

namespace Tests\Feature;

use Tests\TestCase;

class FollowsControllerTest extends TestCase
{
    public $follow;

    public function setUp()
    {
        parent::setUp();
    }
    
    public function test_a_guest_cannot_view_follows()
    {
        $response = $this->get('/follows');
        $response->assertStatus(302);
    }
}
