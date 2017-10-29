<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CustomersControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $customer;

    public function setUp()
    {
        parent::setUp();

	$this->customer = factory(\App\Models\Customer::class)->create();
    }
}
