<?php

namespace Tests\Feature;

use Tests\TestCase;

class ActivitiesControllerTest extends TestCase
{
    public $activity;

    public function setUp()
    {
        parent::setUp();

	$this->activity = factory(\App\Models\Activity::class)->create();
    }

    public function test_a_guest_cannot_view_activities()
    {
	$response = $this->get('/activities');
	$response->assertStatus(302);
    }
}
