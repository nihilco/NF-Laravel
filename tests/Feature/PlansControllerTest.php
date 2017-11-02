<?php

namespace Tests\Feature;

use Tests\TestCase;

class PlansControllerTest extends TestCase
{
    public $plan;

    public function setUp()
    {
        parent::setUp();

	$this->plan = factory(\App\Models\Plan::class)->create();
    }
}
