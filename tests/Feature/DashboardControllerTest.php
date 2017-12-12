<?php

namespace Tests\Feature;

use Tests\TestCase;

class DashboardControllerTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
    }

    public function test_a_guest_cannot_view_the_dashboard()
    {
	$response = $this->get('/dashboard');
	
	$response->assertStatus(302);
    }
}
