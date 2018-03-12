<?php

namespace Tests\Feature;

use Tests\TestCase;

class CalendarsControllerTest extends TestCase
{
    public $calendar;

    public function setUp()
    {
        parent::setUp();

        $this->calendar = factory(\App\Models\Calendar::class)->create();
    }

    public function test_a_guest_cannot_view_calendars()
    {
        $response = $this->get('/calendars');
        $response->assertStatus(302);
    }
}
