<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProvinceTest extends TestCase
{
    public $province;

    public function setUp()
    {
        parent::setUp();

        $this->province = factory(\App\Models\Province::class)->create();
    }

    public function test_a_province_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->province->owner);
    }

    public function test_a_province_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->province->creator);
    }

    public function test_a_province_has_country()
    {
        $this->assertInstanceOf(\App\Models\Country::class, $this->province->country);
    }    
}
