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
}
