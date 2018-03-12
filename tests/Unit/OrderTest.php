<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    public $order;

    public function setUp()
    {
        parent::setUp();

        $this->order = factory(\App\Models\Order::class)->create();
    }

    public function test_an_order_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->order->owner);
    }

    public function test_an_order_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->order->creator);
    }

    public function test_an_order_has_customer()
    {
        $this->assertInstanceOf(\App\Models\Customer::class, $this->order->customer);
    }

    public function test_an_order_has_status()
    {
        $this->assertInstanceOf(\App\Models\Status::class, $this->order->status);
    }    
}
