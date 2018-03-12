<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PhoneNumberTest extends TestCase
{
    public $phoneNumber;

    public function setUp()
    {
        parent::setUp();

        $this->phoneNumber = factory(\App\Models\PhoneNumber::class)->create();
    }

    public function test_a_phone_number_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->phoneNumber->owner);
    }

    public function test_a_phone_number_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->phoneNumber->creator);
    }

    public function test_a_phone_number_has_resource()
    {
        $this->assertInstanceOf(\App\Models\Resource::class, $this->phoneNumber->resource);
    }   
}
