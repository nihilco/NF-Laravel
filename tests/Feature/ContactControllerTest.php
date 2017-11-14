<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactControllerTest extends TestCase
{
    public function test_a_guest_can_view_contact_index()
    {
	$response = $this->get('/contact');
	$response->assertStatus(200);
    }
}
