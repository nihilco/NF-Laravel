<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomerTest extends TestCase
{
    public $customer;

    public function setUp()
    {
        parent::setUp();

        $this->customer = factory(\App\Models\Customer::class)->create();
    }

    public function test_a_customer_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->customer->owner);
    }

    public function test_a_customer_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->customer->creator);
    }    
}
