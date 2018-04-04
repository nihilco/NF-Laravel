<?php

namespace Tests\Feature;

use Tests\TestCase;

class NotificationsControllerTest extends TestCase
{
    public $user;

    public function setUp()
    {
        parent::setUp();
        //$this->user = $this->login();
    }

    public function test_a_guest_cannot_view_notifications()
    {
        $response = $this->get('/notifications');
        $response->assertStatus(302);
    }
}
