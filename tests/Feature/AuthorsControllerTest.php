<?php

namespace Tests\Feature;

use Tests\TestCase;

class AuthorsControllerTest extends TestCase
{
    public $author;

    public function setUp()
    {
        parent::setUp();

	$this->author = factory(\App\Models\Author::class)->create();
    }
}
