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
    public function test_a_guest_cannot_view_books()
    {	
        $response = $this->get('/books');
        $response->assertStatus(302);
    }
}
