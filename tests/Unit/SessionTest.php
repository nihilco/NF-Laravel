<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SessionTest extends TestCase
{
    public $session;

    public function setUp()
    {
        parent::setUp();

        $this->session = factory(\App\Models\Session::class)->create();
    }

    public function test_a_session_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->session->creator);
    }

    public function test_a_session_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->session->owner);
    }            
}
