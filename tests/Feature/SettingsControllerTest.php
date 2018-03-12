<?php

namespace Tests\Feature;

use Tests\TestCase;

class SettingsControllerTest extends TestCase
{
    public $setting;

    public function setUp()
    {
        parent::setUp();

        $this->setting = factory(\App\Models\Setting::class)->create();
    }

    public function test_a_guest_cannot_view_settings()
    {
        $response = $this->get('/settings');
        $response->assertStatus(302);
    }
}
