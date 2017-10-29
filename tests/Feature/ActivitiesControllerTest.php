<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ActivitiesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $activity;

    public function setUp()
    {
        parent::setUp();

	$this->activity = factory(\App\Models\Activity::class)->create();
    }
}
