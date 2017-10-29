<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class WebsitesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $website;

    public function setUp()
    {
        parent::setUp();

	$this->website = factory(\App\Models\Website::class)->create();
    }
}
