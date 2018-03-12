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
    
    public function test_a_user_can_view_users()
    {
        $this->login();
        
        $firstUser = \App\Models\User::first();
        
        $response = $this->get('/users');
        
        $response->assertSee($firstUser->username);
    }
    
    public function test_a_user_can_view_a_user()
    {
        $this->login();
        
        $response = $this->get($this->user->path());
        
        $response->assertSee($this->user->name);
    }
}
