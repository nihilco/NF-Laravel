<?php

namespace Tests\Feature;

use Tests\TestCase;

class SourcesControllerTest extends TestCase
{
    public $source;

    public function setUp()
    {
        parent::setUp();

	$this->source = factory(\App\Models\Source::class)->create();
    }
}
