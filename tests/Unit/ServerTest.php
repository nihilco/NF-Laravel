<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServerTest extends TestCase
{
    public $server;

    public function setUp()
    {
        parent::setUp();

        $this->server = factory(\App\Models\Server::class)->create();
    }

    public function test_a_server_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->server->owner);
    }

    public function test_a_server_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->server->creator);
    }

    public function test_a_server_has_type()
    {
        $this->assertInstanceOf(\App\Models\Type::class, $this->server->type);
    }    
}
