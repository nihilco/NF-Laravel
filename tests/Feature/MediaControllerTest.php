<?php

namespace Tests\Feature;

use Tests\TestCase;

class MediaControllerTest extends TestCase
{
    public $media;

    public function setUp()
    {
        parent::setUp();

        $this->media = factory(\App\Models\Media::class)->create();
    }

    public function test_a_guest_cannot_view_media()
    {
        $response = $this->get('/media');
        $response->assertStatus(302);
    }
}
