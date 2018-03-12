<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SourceTest extends TestCase
{
    public $source;

    public function setUp()
    {
        parent::setUp();

        $this->source = factory(\App\Models\Source::class)->create();
    }

    public function test_a_source_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->source->owner);
    }

    public function test_a_source_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->source->creator);
    }

    public function test_a_source_has_customer()
    {
        $this->assertInstanceOf(\App\Models\Customer::class, $this->source->customer);
    }

    public function test_a_source_has_type()
    {
        $this->assertInstanceOf(\App\Models\Type::class, $this->source->type);
    }    
}
