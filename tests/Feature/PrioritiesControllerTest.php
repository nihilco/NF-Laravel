<?php

namespace Tests\Feature;

use Tests\TestCase;

class PrioritiesControllerTest extends TestCase
{
    public $priority;

    public function setUp()
    {
        parent::setUp();

	$this->priority = factory(\App\Models\Priority::class)->create();
    }
}
