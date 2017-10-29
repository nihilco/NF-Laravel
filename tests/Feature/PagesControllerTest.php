<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PagesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $page;

    public function setUp()
    {
        parent::setUp();

	$this->page = factory(\App\Models\Page::class)->create();
    }
}
