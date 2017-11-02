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
}
