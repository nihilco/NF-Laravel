<?php

namespace Tests\Feature;

use Tests\TestCase;

class OrdersControllerTest extends TestCase
{
    public $order;

    public function setUp()
    {
        parent::setUp();

	$this->order = factory(\App\Models\Order::class)->create();
    }
}
