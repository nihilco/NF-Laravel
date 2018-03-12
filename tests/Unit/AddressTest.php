<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AddressTest extends TestCase
{
    public $address;

    public function setUp()
    {
        parent::setUp();

        $this->address = factory(\App\Models\Address::class)->create();
    }

    public function test_a_address_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->address->owner);
    }

    public function test_an_address_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->address->creator);
    }

    public function test_an_address_has_resource()
    {
        $this->assertInstanceOf(\App\Models\Resource::class, $this->address->resource);
    }

    public function test_an_address_has_province()
    {
        $this->assertInstanceOf(\App\Models\Province::class, $this->address->province);
    }        
}
