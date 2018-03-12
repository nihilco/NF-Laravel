<?php

namespace Tests\Feature;

use Tests\TestCase;

class LineItemsControllerTest extends TestCase
{
    public $lineItem;

    public function setUp()
    {
        parent::setUp();

        $this->lineItem = factory(\App\Models\LineItem::class)->create();
    }

    public function test_a_guest_cannot_view_line_items()
    {
        $response = $this->get('/line-items');
        $response->assertStatus(302);
    }
}
