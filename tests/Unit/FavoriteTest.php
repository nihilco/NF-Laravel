<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FavoriteTest extends TestCase
{
    public $favorite;

    public function setUp()
    {
        parent::setUp();

        $this->favorite = factory(\App\Models\Favorite::class)->create();
    }

    public function test_a_favorite_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->favorite->owner);
    }

    public function test_a_favorite_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->favorite->creator);
    }

    public function test_a_favorite_has_resource()
    {
        $this->assertInstanceOf(\App\Models\Resource::class, $this->favorite->resource);
    }   
}
