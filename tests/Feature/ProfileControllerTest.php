<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProfileControllerTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function test_a_guest_cannot_view_profile()
    {
	$response = $this->get('/profile');
	
	$response->assertStatus(302);
    }
}
