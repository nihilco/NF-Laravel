<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class OrdersControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $order;

    public function setUp()
    {
        parent::setUp();

	$this->order = factory(\App\Models\Order::class)->create();
    }
}
