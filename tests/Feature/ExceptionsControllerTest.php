<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExceptionsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $exception;

    public function setUp()
    {
        parent::setUp();

	$this->exception = factory(\App\Models\Exception::class)->create();
    }
}
