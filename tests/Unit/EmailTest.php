<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailTest extends TestCase
{
    public $email;

    public function setUp()
    {
        parent::setUp();

        $this->email = factory(\App\Models\Email::class)->create();
    }

    public function test_an_email_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->email->owner);
    }

    public function test_an_email_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->email->creator);
    }
}
