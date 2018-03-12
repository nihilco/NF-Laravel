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

    public function test_a_guest_cannot_view_exceptions()
    {
        $response = $this->get('/exceptions');
        $response->assertStatus(302);
    }
}
