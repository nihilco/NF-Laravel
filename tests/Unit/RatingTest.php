<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RatingTest extends TestCase
{
    public $rating;

    public function setUp()
    {
        parent::setUp();

        $this->rating = factory(\App\Models\Rating::class)->create();
    }

    public function test_a_rating_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->rating->owner);
    }

    public function test_a_rating_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->rating->creator);
    }

    public function test_a_rating_has_resource()
    {
        $this->assertInstanceOf(\App\Models\Resource::class, $this->rating->resource);
    }    
}
