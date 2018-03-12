<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AuthorTest extends TestCase
{
    public $author;

    public function setUp()
    {
        parent::setUp();

        $this->author = factory(\App\Models\Author::class)->create();
    }

    public function test_an_author_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->author->owner);
    }

    public function test_an_author_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->author->creator);
    }
}
