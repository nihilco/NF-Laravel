<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CountryTest extends TestCase
{
    public $country;

    public function setUp()
    {
        parent::setUp();

        $this->country = factory(\App\Models\Country::class)->create();
    }

    public function test_a_country_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->country->owner);
    }

    public function test_a_country_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->country->creator);
    }
}
