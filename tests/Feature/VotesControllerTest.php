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
}
