<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LinkTest extends TestCase
{
    public $link;

    public function setUp()
    {
        parent::setUp();

        $this->link = factory(\App\Models\Link::class)->create();
    }

    public function test_a_link_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->link->owner);
    }

    public function test_a_link_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->link->creator);
    }                    
}
