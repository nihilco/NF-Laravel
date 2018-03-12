<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DeviceTest extends TestCase
{
    public $device;

    public function setUp()
    {
        parent::setUp();

        $this->device = factory(\App\Models\Device::class)->create();
    }

    public function test_a_device_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->device->owner);
    }

    public function test_a_device_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->device->creator);
    }        
}
