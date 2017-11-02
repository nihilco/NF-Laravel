<?php

namespace Tests\Feature;

use Tests\TestCase;

class ResourcesControllerTest extends TestCase
{
    public $resource;

    public function setUp()
    {
        parent::setUp();

	$this->resource = factory(\App\Models\Resource::class)->create();
    }
}
