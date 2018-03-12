<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SubscriptionTest extends TestCase
{
    public $subscription;

    public function setUp()
    {
        parent::setUp();

        $this->subscription = factory(\App\Models\Subscription::class)->create();
    }

    public function test_a_subscription_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->subscription->owner);
    }

    public function test_a_subscription_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->subscription->creator);
    }

    public function test_a_subscription_has_customer()
    {
        $this->assertInstanceOf(\App\Models\Customer::class, $this->subscription->customer);
    }

    public function test_a_subscription_has_plan()
    {
        $this->assertInstanceOf(\App\Models\Plan::class, $this->subscription->plan);
    }    
}
