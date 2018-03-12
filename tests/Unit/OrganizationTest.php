<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrganizationTest extends TestCase
{
    public $organization;

    public function setUp()
    {
        parent::setUp();

        $this->organization = factory(\App\Models\Organization::class)->create();
    }

    public function test_an_organization_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->organization->owner);
    }

    public function test_an_organization_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->organization->creator);
    }                                
}
