<?php

namespace Tests\Feature;

use Tests\TestCase;

class ZonesControllerTest extends TestCase
{
    public $zone;

    public function setUp()
    {
        parent::setUp();

	$this->zone = factory(\App\Models\Zone::class)->create();
    }

    public function test_a_guest_cannot_view_zones()
    {
	$response = $this->get('/zones');
	$response->assertStatus(302);
    }
}
