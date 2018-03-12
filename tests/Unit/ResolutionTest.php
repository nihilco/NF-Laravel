<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResolutionTest extends TestCase
{
    public $resolution;

    public function setUp()
    {
        parent::setUp();

        $this->resolution = factory(\App\Models\Resolution::class)->create();
    }

    public function test_a_resolution_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->resolution->owner);
    }

    public function test_a_resolution_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->resolution->creator);
    }    
}
