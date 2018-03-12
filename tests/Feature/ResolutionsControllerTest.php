<?php

namespace Tests\Feature;

use Tests\TestCase;

class ResolutionsControllerTest extends TestCase
{
    public $resolution;

    public function setUp()
    {
        parent::setUp();

        $this->resolution = factory(\App\Models\Resolution::class)->create();
    }
    
    public function test_a_guest_cannot_view_resolutions()
    {
        $response = $this->get('/resolutions');
        $response->assertStatus(302);
    }
    
    public function test_a_guest_ca_view_a_resolution()
    {
        $response = $this->get($this->resolution->path());
        
        $response->assertSee($this->resolution->name);
    }	
}
