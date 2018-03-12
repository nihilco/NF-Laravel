<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PublisherTest extends TestCase
{
    public $publisher;

    public function setUp()
    {
        parent::setUp();

        $this->publisher = factory(\App\Models\Publisher::class)->create();
    }

    public function test_a_publisher_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->publisher->owner);
    }

    public function test_a_publisher_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->publisher->creator);
    }

    public function test_a_publisher_has_address()
    {
        $this->assertInstanceOf(\App\Models\Address::class, $this->publisher->address);
    }    
}
