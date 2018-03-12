<?php

namespace Tests\Feature;

use Tests\TestCase;

class TagsControllerTest extends TestCase
{
    public $tag;

    public function setUp()
    {
        parent::setUp();

        $this->tag = factory(\App\Models\Tag::class)->create();
    }

    public function test_a_guest_cannot_view_tags()
    {
        $response = $this->get('/tags');
        $response->assertStatus(302);
    }
}
