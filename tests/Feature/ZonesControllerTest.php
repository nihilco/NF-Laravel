<?php

namespace Tests\Feature;

use Tests\TestCase;

class ZonesControllerTest extends TestCase
{
    public $zone;

    public function setUp()
    {
        parent::setUp();

	$this->zone = factory(\App\Models\Zone::class)->create();
    }
}
