<?php

namespace Tests\Feature;

use Tests\TestCase;

class DefaultControllerTest extends TestCase
{
    public function test_a_guest_can_view_default_index()
    {
	$response = $this->get('/');
	$response->assertStatus(200);
    }
}
