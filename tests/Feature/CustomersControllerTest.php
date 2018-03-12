<?php

namespace Tests\Feature;

use Tests\TestCase;

class CustomersControllerTest extends TestCase
{
    public $customer;

    public function setUp()
    {
        parent::setUp();
        
        $this->customer = factory(\App\Models\Customer::class)->create();
    }

    public function test_a_guest_cannot_view_customers()
    {
        $response = $this->get('/customers');
        $response->assertStatus(302);
    }
}
