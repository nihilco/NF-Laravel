<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TypeTest extends TestCase
{
    public $type;

    public function setUp()
    {
        parent::setUp();

        $this->type = factory(\App\Models\Type::class)->create();
    }

    public function test_a_type_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->type->owner);
    }

    public function test_a_type_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->type->creator);
    }
}
