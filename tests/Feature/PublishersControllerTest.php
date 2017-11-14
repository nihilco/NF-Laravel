<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublishersControllerTest extends TestCase
{
    public $publisher;

    public function setUp()
    {
        parent::setUp();

	$this->publisher = factory(\App\Models\Publisher::class)->create();
    }

    public function test_a_guest_cannot_view_publishers()
    {
	$response = $this->get('/publishers');
	
	$response->assertStatus(302);
    }

    public function test_a_guest_cannot_view_a_publisher()
    {
	$response = $this->get($this->publisher->path());
	
	$response->assertSee($this->publisher->name);
    }
}
