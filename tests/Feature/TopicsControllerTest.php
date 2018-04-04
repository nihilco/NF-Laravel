<?php

namespace Tests\Feature;

use Tests\TestCase;

class TopicsControllerTest extends TestCase
{
    public $topic;

    public function setUp()
    {
        parent::setUp();
	
        $this->topic = factory(\App\Models\Topic::class)->create();
    }

    public function test_a_guest_cannot_view_topics()
    {
        $response = $this->get('/topics');
        $response->assertStatus(302);
    }
}
