<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AuthorsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $author;

    public function setUp()
    {
        parent::setUp();

	$this->author = factory(\App\Models\Author::class)->create();
    }
}
