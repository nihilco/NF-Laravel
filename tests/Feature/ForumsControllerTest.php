<?php

namespace Tests\Feature;

use Tests\TestCase;

class ForumsControllerTest extends TestCase
{
    public $forum;

    public function setUp()
    {
        parent::setUp();

	$this->forum = factory(\App\Models\Forum::class)->create();
    }
}
