<?php

namespace Tests\Feature;

use Tests\TestCase;

class ResourcesControllerTest extends TestCase
{
    public $resource;

    public function setUp()
    {
        parent::setUp();

	$this->resource = factory(\App\Models\Resource::class)->create();
    }

    public function test_a_guest_cannot_view_resources()
    {
	$response = $this->get('/resources');
	$response->assertStatus(302);
    }
}
