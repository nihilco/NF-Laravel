<?php

namespace Tests\Feature;

use Tests\TestCase;

class StatusesControllerTest extends TestCase
{
    public $status;

    public function setUp()
    {
        parent::setUp();

	$this->status = factory(\App\Models\Status::class)->create();
    }

    public function test_a_guest_cannot_view_statuses()
    {
	$response = $this->get('/statuses');
	$response->assertStatus(302);
    }

    public function test_a_guest_ca_view_a_status()
    {
	$response = $this->get($this->status->path());

	$response->assertSee($this->status->name);
    }	
}
