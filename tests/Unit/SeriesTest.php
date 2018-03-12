<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SeriesTest extends TestCase
{
    public $series;

    public function setUp()
    {
        parent::setUp();

        $this->series = factory(\App\Models\Series::class)->create();
    }

    public function test_a_series_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->series->owner);
    }

    public function test_a_series_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->series->creator);
    }        
}
