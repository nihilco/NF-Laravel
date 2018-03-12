<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PriorityTest extends TestCase
{
    public $priority;

    public function setUp()
    {
        parent::setUp();

        $this->priority = factory(\App\Models\Priority::class)->create();
    }

    public function test_a_priority_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->priority->owner);
    }

    public function test_a_priority_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->priority->creator);
    }        
}
