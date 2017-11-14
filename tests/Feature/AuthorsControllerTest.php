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

    public function test_a_guest_can_view_authors()
    {
	$response = $this->get('/authors');
	
	$response->assertSee($this->author->last_name);
    }

    public function test_a_guest_can_view_a_author()
    {
	$response = $this->get($this->author->path());

	$response->assertSee($this->author->last_name);
    }
}
