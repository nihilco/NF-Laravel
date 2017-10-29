<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class BooksControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $book;

    public function setUp()
    {
        parent::setUp();

	$this->book = factory(\App\Models\Book::class)->create();
    }
}
