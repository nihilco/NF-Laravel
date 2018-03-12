<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ClientCaseTest extends TestCase
{
    public $clientCase;

    public function setUp()
    {
        parent::setUp();

        $this->clientCase = factory(\App\Models\ClientCase::class)->create();
    }

    public function test_a_case_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->clientCase->owner);
    }

    public function test_a_case_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->clientCase->creator);
    }

    public function test_a_case_has_client()
    {
        $this->assertInstanceOf(\App\Models\Client::class, $this->clientCase->client);
    }

    public function test_a_case_has_case_type()
    {
        $this->assertInstanceOf(\App\Models\CaseType::class, $this->clientCase->type);
    }    
}
