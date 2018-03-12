<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class StatusTest extends TestCase
{
    public $status;

    public function setUp()
    {
        parent::setUp();

        $this->status = factory(\App\Models\Status::class)->create();
    }

    public function test_a_status_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->status->owner);
    }

    public function test_a_status_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->status->creator);
    }
}
