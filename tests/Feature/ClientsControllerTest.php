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
}
