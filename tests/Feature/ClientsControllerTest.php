<?php

namespace Tests\Feature;

use Tests\TestCase;

class ClientsControllerTest extends TestCase
{
    public $client;

    public function setUp()
    {
        parent::setUp();

	$this->client = factory(\App\Models\Client::class)->create();
    }

    public function test_a_guest_cannot_view_clients()
    {
	$response = $this->get('/clients');
	$response->assertStatus(302);
    }
}
