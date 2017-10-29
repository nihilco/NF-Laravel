<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ResourcesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $resource;

    public function setUp()
    {
        parent::setUp();

	$this->resource = factory(\App\Models\Resource::class)->create();
    }
}
