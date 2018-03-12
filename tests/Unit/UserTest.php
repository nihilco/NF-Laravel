<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    public $user;

    public function setUp()
    {
        parent::setUp();

        $this->user = factory(\App\Models\User::class)->create();
    }

    public function test_an_user_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->user->owner);
    }

    public function test_an_user_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->user->creator);
    }    
}
