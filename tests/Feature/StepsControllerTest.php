<?php

namespace Tests\Feature;

use Tests\TestCase;

class StepsControllerTest extends TestCase
{
    public $step;

    public function setUp()
    {
        parent::setUp();

	$this->step = factory(\App\Models\Step::class)->create();
    }
}
