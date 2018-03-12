<?php

namespace Tests\Feature;

use Tests\TestCase;

class CountriesControllerTest extends TestCase
{
    public $country;

    public function setUp()
    {
        parent::setUp();
        
        $this->country = factory(\App\Models\Country::class)->create();
    }

    public function test_a_guest_cannot_view_country()
    {
        $response = $this->get('/countries');
        $response->assertStatus(302);
    }
}
