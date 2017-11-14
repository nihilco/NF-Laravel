<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesControllerTest extends TestCase
{
    public $page;

    public function setUp()
    {
        parent::setUp();

	$this->page = factory(\App\Models\Page::class)->create();
    }

    public function test_a_guest_can_view_a_page()
    {
	$response = $this->get($this->page->path());
	
	$response->assertSee($this->page->title);
    }
}
