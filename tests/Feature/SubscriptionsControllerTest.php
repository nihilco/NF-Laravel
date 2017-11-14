<?php

namespace Tests\Feature;

use Tests\TestCase;

class SubscriptionsControllerTest extends TestCase
{
    public $subscription;

    public function setUp()
    {
        parent::setUp();

	$this->subscription = factory(\App\Models\Subscription::class)->create();
    }

    public function test_a_guest_cannot_view_subscriptions()
    {
	$response = $this->get('/subscriptions');
	$response->assertStatus(302);
    }
}
