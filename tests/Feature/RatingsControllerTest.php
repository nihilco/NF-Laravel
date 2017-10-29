<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RatingsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $rating;

    public function setUp()
    {
        parent::setUp();

	$this->rating = factory(\App\Models\Rating::class)->create();
    }
}
