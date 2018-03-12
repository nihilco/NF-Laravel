<?php

namespace Tests\Feature;

use Tests\TestCase;

class PhoneNumbersControllerTest extends TestCase
{
    public $phoneNumber;

    public function setUp()
    {
        parent::setUp();

        $this->phoneNumber = factory(\App\Models\PhoneNumber::class)->create();
    }

    public function test_a_guest_cannot_view_phone_numbers()
    {
        $response = $this->get('/phone-numbers');
        $response->assertStatus(302);
    }
}
