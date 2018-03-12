<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FollowTest extends TestCase
{
    public $follow;

    public function setUp()
    {
        parent::setUp();

        $this->follow = factory(\App\Models\Follow::class)->create();
    }

    public function test_a_follow_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->follow->owner);
    }

    public function test_a_follow_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->follow->creator);
    }

    public function test_a_follow_has_resource()
    {
        $this->assertInstanceOf(\App\Models\Resource::class, $this->follow->resource);
    }    
}
