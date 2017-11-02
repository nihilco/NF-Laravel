<?php

namespace Tests\Feature;

use Tests\TestCase;

class RepliesControllerTest extends TestCase
{
    public $reply;

    public function setUp()
    {
        parent::setUp();

	$this->reply = factory(\App\Models\Reply::class)->create();
    }
}
