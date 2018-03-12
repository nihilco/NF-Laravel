<?php

namespace Tests\Feature;

use Tests\TestCase;

class CategoriesControllerTest extends TestCase
{
    public $category;

    public function setUp()
    {
        parent::setUp();

        $this->category = factory(\App\Models\Category::class)->create();
    }

    public function test_a_guest_cannot_view_categories()
    {
        $response = $this->get('/categories');
        $response->assertStatus(302);
    }
}
