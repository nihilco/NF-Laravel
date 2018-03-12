<?php

namespace Tests\Feature;

use Tests\TestCase;

class GroupsControllerTest extends TestCase
{
    public $group;

    public function setUp()
    {
        parent::setUp();

        $this->group = factory(\App\Models\Group::class)->create();
    }

    public function test_a_guest_cannot_view_groups()
    {
        $response = $this->get('/groups');
        $response->assertStatus(302);
    }
}
