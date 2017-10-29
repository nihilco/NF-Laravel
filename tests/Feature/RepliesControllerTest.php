<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RepliesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $reply;

    public function setUp()
    {
        parent::setUp();

	$this->reply = factory(\App\Models\Reply::class)->create();
    }
}
