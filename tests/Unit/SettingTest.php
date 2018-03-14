<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SettingTest extends TestCase
{
    public $setting;

    public function setUp()
    {
        parent::setUp();

        $this->setting = factory(\App\Models\Setting::class)->create();
    }

    public function test_a_setting_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->setting->owner);
    }

    public function test_a_setting_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->setting->creator);
    }

    public function test_a_setting_has_value_type()
    {
        $this->assertInstanceOf(\App\Models\Type::class, $this->setting->valueType);
    }    
}