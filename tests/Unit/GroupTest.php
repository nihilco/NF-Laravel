<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GroupTest extends TestCase
{
    public $group;

    public function setUp()
    {
        parent::setUp();

        $this->group = factory(\App\Models\Group::class)->create();
    }

    public function test_a_group_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->group->owner);
    }

    public function test_a_group_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->group->creator);
    }    
}
