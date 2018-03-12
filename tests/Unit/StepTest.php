<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StepTest extends TestCase
{
    public $step;

    public function setUp()
    {
        parent::setUp();

        $this->step = factory(\App\Models\Step::class)->create();
    }

    public function test_a_step_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->step->owner);
    }

    public function test_a_step_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->step->creator);
    }

    public function test_a_step_has_tutorial()
    {
        $this->assertInstanceOf(\App\Models\Tutorial::class, $this->step->tutorial);
    }    
}
