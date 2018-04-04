<?php

namespace Tests\Feature;

use Tests\TestCase;

class IssuesControllerTest extends TestCase
{
    public $issue;

    public function setUp()
    {
        parent::setUp();

        $this->issue = factory(\App\Models\Issue::class)->create();
    }

    public function test_a_guest_cannot_view_issues()
    {
        $response = $this->get('/issues');        
        $response->assertStatus(302);
    }
}