<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExceptionTest extends TestCase
{
    public $exception;

    public function setUp()
    {
        parent::setUp();

        $this->exception = factory(\App\Models\Exception::class)->create();
    }

    public function test_an_exception_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->exception->owner);
    }

    public function test_an_exception_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->exception->creator);
    }

    public function test_an_exception_has_type()
    {
        $this->assertInstanceOf(\App\Models\Type::class, $this->exception->type);
    }        
}
