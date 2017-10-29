<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ZonesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $zone;

    public function setUp()
    {
        parent::setUp();

	$this->zone = factory(\App\Models\Zone::class)->create();
    }
}
