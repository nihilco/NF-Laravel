<?php

namespace Tests\Feature;

use Tests\TestCase;

class UsersControllerTest extends TestCase
{
    public $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(\App\Models\User::class)->create();
    }
    
    public function test_a_guest_cannot_view_users()
    {
        $response = $this->get('/users');        
        $response->assertStatus(302);
    }
}
