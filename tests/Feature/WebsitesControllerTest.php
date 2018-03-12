<?php

namespace Tests\Feature;

use Tests\TestCase;

class WebsitesControllerTest extends TestCase
{
    public $website;

    public function setUp()
    {
        parent::setUp();
        
        $this->website = factory(\App\Models\Website::class)->create();
    }

    public function test_a_guest_cannot_view_websites()
    {
        $response = $this->get('/websites');
        $response->assertStatus(302);
    }
}
