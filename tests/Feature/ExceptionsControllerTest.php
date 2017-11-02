<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExceptionsControllerTest extends TestCase
{
    public $exception;

    public function setUp()
    {
        parent::setUp();

	$this->exception = factory(\App\Models\Exception::class)->create();
    }
}
