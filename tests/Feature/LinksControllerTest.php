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
}
