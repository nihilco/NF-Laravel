<?php

namespace Tests\Feature;

use Tests\TestCase;

class BooksControllerTest extends TestCase
{
    public $book;

    public function setUp()
    {
        parent::setUp();

        $this->book = factory(\App\Models\Book::class)->create();
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_guest_can_view_books()
    {	
        $response = $this->get('/books');

        $response->assertSee($this->book->title);
    }

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_guest_can_view_a_book()
    {
        $response = $this->get('/books/' . $this->book->id);

        $response->assertSee($this->book->title);
    }
}
