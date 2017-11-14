<?php

namespace Tests\Feature;

use Tests\TestCase;

class StepsControllerTest extends TestCase
{
    public $step;

    public function setUp()
    {
        parent::setUp();

	$this->step = factory(\App\Models\Step::class)->create();
    }

    public function test_a_guest_cannot_view_steps()
    {
	$response = $this->get('/steps');
	$response->assertStatus(302);
    }

    public function test_a_guest_cannot_view_a_step()
    {
	$response = $this->get($this->step->path());
	$response->assertSee($this->step->content);
    }
}
