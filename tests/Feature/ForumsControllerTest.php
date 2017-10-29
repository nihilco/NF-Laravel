<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ForumsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $forum;

    public function setUp()
    {
        parent::setUp();

	$this->forum = factory(\App\Models\Forum::class)->create();
    }
}
