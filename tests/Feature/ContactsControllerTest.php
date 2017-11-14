<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactsControllerTest extends TestCase
{
    public $contact;

    public function setUp()
    {
        parent::setUp();

	$this->contact = factory(\App\Models\Contact::class)->create();
    }

    public function test_a_guest_cannot_view_contacts()
    {
	$response = $this->get('/contacts');
	$response->assertStatus(302);
    }

}
