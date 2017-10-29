<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PublishersControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $publisher;

    public function setUp()
    {
        parent::setUp();

	$this->publisher = factory(\App\Models\Publisher::class)->create();
    }
}
