<?php

namespace Tests\Feature;

use Tests\TestCase;

class ForumsControllerTest extends TestCase
{
    public $forum;

    public function setUp()
    {
        parent::setUp();
	
	$this->forum = factory(\App\Models\Forum::class)->create();
    }

    public function test_a_guest_can_view_forums()
    {
	$response = $this->get('/forums');

	$response->assertSee($this->forum->title);
    }

    public function test_a_guest_can_view_a_forum()
    {
	$response = $this->get($this->forum->path());

	$response->assertSee($this->forum->title);
    }
}
