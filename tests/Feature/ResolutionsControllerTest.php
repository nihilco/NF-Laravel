<?php

namespace Tests\Feature;

use Tests\TestCase;

class ResolutionsControllerTest extends TestCase
{
    public $resolution;

    public function setUp()
    {
        parent::setUp();

	$this->resolution = factory(\App\Models\Resolution::class)->create();
    }
}
