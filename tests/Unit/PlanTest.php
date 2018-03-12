<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlanTest extends TestCase
{
    public $plan;

    public function setUp()
    {
        parent::setUp();

        $this->plan = factory(\App\Models\Plan::class)->create();
    }

    public function test_a_plan_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->plan->owner);
    }

    public function test_a_plan_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->plan->creator);
    }        
}
