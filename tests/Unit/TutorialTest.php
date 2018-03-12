<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TutorialTest extends TestCase
{
    public $tutorial;

    public function setUp()
    {
        parent::setUp();

        $this->tutorial = factory(\App\Models\Tutorial::class)->create();
    }

    public function test_a_tutorial_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->tutorial->owner);
    }

    public function test_a_tutorial_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->tutorial->creator);
    }
}
