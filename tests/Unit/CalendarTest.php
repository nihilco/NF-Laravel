<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CalendarTest extends TestCase
{
    public $calendar;

    public function setUp()
    {
        parent::setUp();

        $this->calendar = factory(\App\Models\Calendar::class)->create();
    }

    public function test_a_calendar_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->calendar->owner);
    }

    public function test_a_calendar_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->calendar->creator);
    }    
}
