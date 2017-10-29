<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class LinksControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $link;

    public function setUp()
    {
        parent::setUp();

	$this->link = factory(\App\Models\Link::class)->create();
    }
}
