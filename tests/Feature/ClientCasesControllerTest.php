<?php

namespace Tests\Feature;

use Tests\TestCase;

class ClientCasesControllerTest extends TestCase
{
    public $clientCase;

    public function setUp()
    {
        parent::setUp();

        $this->clientCase = factory(\App\Models\ClientCase::class)->create();
    }

    public function test_a_guest_cannot_view_client_cases()
    {
        $response = $this->get('/cases');
        $response->assertStatus(302);
    }
}
