<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientTest extends TestCase
{
    public $client;

    public function setUp()
    {
        parent::setUp();

	$this->client = factory(\App\Models\Client::class)->create();
    }

    public function test_a_client_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->client->owner);
    }

    public function test_a_client_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->client->creator);
    }
}
