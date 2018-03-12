<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MediaTest extends TestCase
{
    public $media;

    public function setUp()
    {
        parent::setUp();

        $this->media = factory(\App\Models\Media::class)->create();
    }

    public function test_a_media_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->media->owner);
    }

    public function test_a_media_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->media->creator);
    }                        
}
