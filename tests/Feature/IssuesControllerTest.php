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
}