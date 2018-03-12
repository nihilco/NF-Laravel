<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    public $product;

    public function setUp()
    {
        parent::setUp();

        $this->product = factory(\App\Models\Product::class)->create();
    }

    public function test_a_product_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->product->owner);
    }

    public function test_a_product_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->product->creator);
    }            
}
