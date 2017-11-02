<?php

namespace Tests\Feature;

use Tests\TestCase;

class ProvincesControllerTest extends TestCase
{
    public $province;

    public function setUp()
    {
        parent::setUp();

	$this->province = factory(\App\Models\Province::class)->create();
    }
}
