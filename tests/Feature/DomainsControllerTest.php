<?php

namespace Tests\Feature;

use Tests\TestCase;

class DomainsControllerTest extends TestCase
{
    public $domain;

    public function setUp()
    {
        parent::setUp();

        $this->domain = factory(\App\Models\Domain::class)->create();
    }

    public function test_a_guest_cannot_view_domains()
    {
        $response = $this->get('/domains');
        $response->assertStatus(302);
    }

}
