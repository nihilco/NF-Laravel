<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WebsiteTest extends TestCase
{
    public $website;

    public function setUp()
    {
        parent::setUp();

        $this->website = factory(\App\Models\Website::class)->create();
    }

    public function test_a_website_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->website->owner);
    }

    public function test_a_website_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->website->creator);
    }

    public function test_a_website_has_domain()
    {
        $this->assertInstanceOf(\App\Models\Domain::class, $this->website->domain);
    }    
}
