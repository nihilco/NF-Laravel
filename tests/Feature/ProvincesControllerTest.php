<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProvincesControllerTest extends TestCase
{
    public $province;

    public function setUp()
    {
        parent::setUp();

	$this->province = factory(\App\Models\Province::class)->create();
    }

    public function test_a_guest_cannot_view_provinces()
    {
	$response = $this->get('/provinces');
	
	$response->assertStatus(302);
    }

    public function test_a_guest_cannot_view_a_province()
    {
	$response = $this->get($this->province->path());
	
	$response->assertSee($this->province->name);
    }
}
