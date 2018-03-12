<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DomainTest extends TestCase
{
    public $domain;

    public function setUp()
    {
        parent::setUp();

        $this->domain = factory(\App\Models\Domain::class)->create();
    }

    public function test_a_domain_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->domain->owner);
    }

    public function test_a_domain_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->domain->creator);
    }

    public function test_a_domain_has_customer()
    {
        $this->assertInstanceOf(\App\Models\Customer::class, $this->domain->customer);
    }            
}
