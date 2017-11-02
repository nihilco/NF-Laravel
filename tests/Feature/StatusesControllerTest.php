<?php

namespace Tests\Feature;

use Tests\TestCase;

class StatusesControllerTest extends TestCase
{
    public $status;

    public function setUp()
    {
        parent::setUp();

	$this->status = factory(\App\Models\Status::class)->create();
    }
}
