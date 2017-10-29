<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SourcesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $source;

    public function setUp()
    {
        parent::setUp();

	$this->source = factory(\App\Models\Source::class)->create();
    }
}
