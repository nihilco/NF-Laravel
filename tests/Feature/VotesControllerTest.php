<?php

namespace Tests\Feature;

use Tests\TestCase;

class VotesControllerTest extends TestCase
{
    public $vote;

    public function setUp()
    {
        parent::setUp();

	$this->vote = factory(\App\Models\Vote::class)->create();
    }

    public function test_a_guest_cannot_view_votes()
    {
	$response = $this->get('/votes');
	$response->assertStatus(302);
    }

}
