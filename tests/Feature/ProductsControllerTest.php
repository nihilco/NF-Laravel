<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProductsControllerTest extends TestCase
{
    public $product;

    public function setUp()
    {
        parent::setUp();

        $this->product = factory(\App\Models\Product::class)->create();
    }

    public function test_a_guest_cannot_view_products()
    {
        $response = $this->get('/products');
        $response->assertStatus(302);
    }
}
