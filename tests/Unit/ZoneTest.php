<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ZoneTest extends TestCase
{
    public $zone;

    public function setUp()
    {
        parent::setUp();

        $this->zone = factory(\App\Models\Zone::class)->create();
    }

    public function test_a_zone_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->zone->owner);
    }

    public function test_a_zone_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->zone->creator);
    }

    public function test_a_zone_has_domain()
    {
        $this->assertInstanceOf(\App\Models\Domain::class, $this->zone->domain);
    }    
}
