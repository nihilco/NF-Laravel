<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrioritiesControllerTest extends TestCase
{
    public $priority;

    public function setUp()
    {
        parent::setUp();

	$this->priority = factory(\App\Models\Priority::class)->create();
    }

    public function test_a_guest_cannot_view_priorities()
    {
	$response = $this->get('/priorities');
	$response->assertStatus(302);
    }

    public function test_a_guest_ca_view_a_priority()
    {
	$response = $this->get($this->priority->path());

	$response->assertSee($this->priority->name);
    }	
}
