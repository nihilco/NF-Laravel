<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PageTest extends TestCase
{
    public $page;

    public function setUp()
    {
        parent::setUp();

	$this->page = factory(\App\Models\Page::class)->create();
    }

    public function test_a_page_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->page->owner);
    }

    public function test_a_page_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->page->creator);
    }
}
