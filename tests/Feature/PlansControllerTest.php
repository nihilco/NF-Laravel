<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PlansControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $plan;

    public function setUp()
    {
        parent::setUp();

	$this->plan = factory(\App\Models\Plan::class)->create();
    }
}
