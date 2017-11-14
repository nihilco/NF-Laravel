<?php

namespace Tests\Feature;

use Tests\TestCase;

class SessionsControllerTest extends TestCase
{
    //public $session;

    public function setUp()
    {
        parent::setUp();

	//$this->session = factory(\App\Models\Session::class)->create();
    }

    public function test_a_guest_cannot_view_sessions()
    {
	$response = $this->get('/sessions');
	$response->assertStatus(302);
    }

    public function test_a_guest_can_view_create_session()
    {
	$response = $this->get('/sessions/create');
	$response->assertStatus(200);
    }
}
