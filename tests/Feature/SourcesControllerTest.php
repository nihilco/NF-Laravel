<?php

namespace Tests\Feature;

use Tests\TestCase;

class SourcesControllerTest extends TestCase
{
    public $source;

    public function setUp()
    {
        parent::setUp();

        $this->source = factory(\App\Models\Source::class)->create();
    }

    public function test_a_guest_cannot_view_sources()
    {
        $response = $this->get('/sources');
        $response->assertStatus(302);
    }
}
