<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookTest extends TestCase
{
    public $book;

    public function setUp()
    {
        parent::setUp();

        $this->book = factory(\App\Models\Book::class)->create();
    }

    public function test_a_book_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->book->owner);
    }

    public function test_a_book_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->book->creator);
    }
}
