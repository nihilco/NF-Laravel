<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ClientsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $client;

    public function setUp()
    {
        parent::setUp();

	$this->client = factory(\App\Models\Client::class)->create();
    }
}
