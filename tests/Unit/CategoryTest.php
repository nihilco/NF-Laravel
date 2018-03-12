<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    public $category;

    public function setUp()
    {
        parent::setUp();

        $this->category = factory(\App\Models\Category::class)->create();
    }

    public function test_a_category_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->category->owner);
    }

    public function test_a_category_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->category->creator);
    }        
}
