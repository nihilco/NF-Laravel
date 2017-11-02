<?php

namespace Tests\Feature;

use Tests\TestCase;

class DevicesControllerTest extends TestCase
{
    public $device;

    public function setUp()
    {
        parent::setUp();

	$this->device = factory(\App\Models\Device::class)->create();
    }
}
