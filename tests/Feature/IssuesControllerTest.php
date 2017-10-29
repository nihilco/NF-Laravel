<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class IssuesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $issue;

    public function setUp()
    {
        parent::setUp();

	$this->issue = factory(\App\Models\Issue::class)->create();
    }
}