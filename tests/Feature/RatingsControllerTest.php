<?php

namespace Tests\Feature;

use Tests\TestCase;

class RatingsControllerTest extends TestCase
{
    public $rating;

    public function setUp()
    {
        parent::setUp();

	$this->rating = factory(\App\Models\Rating::class)->create();
    }
}
