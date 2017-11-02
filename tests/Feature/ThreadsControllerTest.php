<?php

namespace Tests\Feature;

use Tests\TestCase;

class ThreadsControllerTest extends TestCase
{
    public $thread;

    public function setUp()
    {
        parent::setUp();

	$this->thread = factory(\App\Models\Thread::class)->create();
    }
}
