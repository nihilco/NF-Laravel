<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ForumTest extends TestCase
{
    public $forum;

    public function setUp()
    {
        parent::setUp();

	$this->forum = factory(\App\Models\Forum::class)->create();
    }

    public function test_a_forum_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->forum->owner);
    }

    public function test_a_forum_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->forum->creator);
    }
}
