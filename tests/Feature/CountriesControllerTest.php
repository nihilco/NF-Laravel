<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CountriesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $country;

    public function setUp()
    {
        parent::setUp();

	$this->country = factory(\App\Models\Country::class)->create();
    }
}
