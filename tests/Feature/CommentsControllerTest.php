<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CommentsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $comment;

    public function setUp()
    {
        parent::setUp();

	$this->comment = factory(\App\Models\Comment::class)->create();
    }
}
