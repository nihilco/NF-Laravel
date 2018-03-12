<?php

namespace Tests\Feature;

use Tests\TestCase;

class OrganizationsControllerTest extends TestCase
{
    public $organization;

    public function setUp()
    {
        parent::setUp();

        $this->organization = factory(\App\Models\Organization::class)->create();
    }

    public function test_a_guest_cannot_view_organizations()
    {
        $response = $this->get('/organizations');
        $response->assertStatus(302);
    }
}
