<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class LineItemTest extends TestCase
{
    public $lineItem;

    public function setUp()
    {
        parent::setUp();

        $this->lineItem = factory(\App\Models\LineItem::class)->create();
    }

    public function test_a_line_item_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->lineItem->owner);
    }

    public function test_a_line_item_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->lineItem->creator);
    }

    public function test_a_line_item_has_resource()
    {
        $this->assertInstanceOf(\App\Models\Resource::class, $this->lineItem->resource);
    }

    public function test_a_line_item_has_product()
    {
        $this->assertInstanceOf(\App\Models\Product::class, $this->lineItem->product);
    }    
}
