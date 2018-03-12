<?php

namespace Tests\Feature;

use Tests\TestCase;

class AliasesControllerTest extends TestCase
{
    public $alias;

    public function setUp()
    {
        parent::setUp();

        $this->alias = factory(\App\Models\Alias::class)->create();
    }

    public function test_a_guest_cannot_view_alias()
    {
        $response = $this->get('/aliases');
        $response->assertStatus(302);
    }
}
