<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class StepsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $step;

    public function setUp()
    {
        parent::setUp();

	$this->step = factory(\App\Models\Step::class)->create();
    }
}
