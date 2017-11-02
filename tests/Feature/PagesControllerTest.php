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
}
