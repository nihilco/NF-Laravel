<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AliasTest extends TestCase
{
    public $alias;

    public function setUp()
    {
        parent::setUp();

        $this->alias = factory(\App\Models\Alias::class)->create();
    }

    public function test_an_alias_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->alias->owner);
    }

    public function test_an_alias_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->alias->creator);
    }

    public function test_an_alias_has_domain()
    {
        $this->assertInstanceOf(\App\Models\Domain::class, $this->alias->domain);
    }    
}
