<?php

namespace Tests\Feature;

use Tests\TestCase;

class SeriesControllerTest extends TestCase
{
    public $series;

    public function setUp()
    {
        parent::setUp();

        $this->series = factory(\App\Models\Series::class)->create();
    }

    public function test_a_guest_cannot_view_series()
    {
        $response = $this->get('/series');
        $response->assertStatus(302);
    }
}
