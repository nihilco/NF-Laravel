<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ProvincesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $province;

    public function setUp()
    {
        parent::setUp();

	$this->province = factory(\App\Models\Province::class)->create();
    }
}
