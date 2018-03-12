<?php

namespace Tests\Feature;

use Tests\TestCase;

class EmailsControllerTest extends TestCase
{
    public $email;

    public function setUp()
    {
        parent::setUp();

        $this->email = factory(\App\Models\Email::class)->create();
    }

    public function test_a_guest_cannot_view_emails()
    {
        $response = $this->get('/emails');
        $response->assertStatus(302);
    }
}
