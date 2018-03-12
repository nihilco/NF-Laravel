<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IssueTest extends TestCase
{
    public $issue;

    public function setUp()
    {
        parent::setUp();

        $this->issue = factory(\App\Models\Issue::class)->create();
    }

    public function test_an_issue_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->issue->owner);
    }

    public function test_an_issue_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->issue->creator);
    }            
}
