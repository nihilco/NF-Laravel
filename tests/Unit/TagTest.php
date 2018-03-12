<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TagTest extends TestCase
{
    public $tag;

    public function setUp()
    {
        parent::setUp();

        $this->tag = factory(\App\Models\Tag::class)->create();
    }

    public function test_a_tag_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->tag->owner);
    }

    public function test_a_tag_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->tag->creator);
    }
}
