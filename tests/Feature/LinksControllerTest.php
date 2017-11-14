<?php

namespace Tests\Feature;

use Tests\TestCase;

class LinksControllerTest extends TestCase
{
    public $link;

    public function setUp()
    {
        parent::setUp();

	$this->link = factory(\App\Models\Link::class)->create();
    }

    public function test_a_guest_cannot_view_links()
    {
	$response = $this->get('/links');
	$response->assertStatus(302);
    }

    public function test_a_guest_can_view_a_link()
    {
	$response = $this->get($this->link->path());

	$response->assertStatus(302);
    }

}
