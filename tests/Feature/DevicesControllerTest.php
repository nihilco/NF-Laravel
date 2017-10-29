<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DevicesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $device;

    public function setUp()
    {
        parent::setUp();

	$this->device = factory(\App\Models\Device::class)->create();
    }
}
