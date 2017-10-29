<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class VotesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $vote;

    public function setUp()
    {
        parent::setUp();

	$this->vote = factory(\App\Models\Vote::class)->create();
    }
}
