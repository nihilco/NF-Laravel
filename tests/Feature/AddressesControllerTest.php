<?php

namespace Tests\Feature;

use Tests\TestCase;

class AddressesControllerTest extends TestCase
{
    public $address;

    public function setUp()
    {
        parent::setUp();
        
        $this->address = factory(\App\Models\Address::class)->create();
    }

    public function test_a_guest_cannot_view_addresses()
    {
        $response = $this->get('/addresses');
        $response->assertStatus(302);
    }
}
