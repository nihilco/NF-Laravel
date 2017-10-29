<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SubscriptionsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $subscription;

    public function setUp()
    {
        parent::setUp();

	$this->subscription = factory(\App\Models\Subscription::class)->create();
    }
}
