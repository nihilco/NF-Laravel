<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VoteTest extends TestCase
{
    public $vote;

    public function setUp()
    {
        parent::setUp();

        $this->vote = factory(\App\Models\Vote::class)->create();
    }

    public function test_a_vote_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->vote->owner);
    }

    public function test_a_vote_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->vote->creator);
    }

    public function test_a_vote_has_resource()
    {
        $this->assertInstanceOf(\App\Models\Resource::class, $this->vote->resource);
    }    
}
