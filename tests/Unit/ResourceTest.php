<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ResourceTest extends TestCase
{
    public $resource;

    public function setUp()
    {
        parent::setUp();

        $this->resource = factory(\App\Models\Resource::class)->create();
    }

    public function test_a_resource_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->resource->owner);
    }

    public function test_a_resource_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->resource->creator);
    }

    public function test_a_resource_has_type()
    {
        $this->assertInstanceOf(\App\Models\Type::class, $this->resource->type);
    }    
}
