<?php

namespace Tests\Feature;

use Tests\TestCase;

class CountriesControllerTest extends TestCase
{
    public $country;

    public function setUp()
    {
        parent::setUp();

	$this->country = factory(\App\Models\Country::class)->create();
    }
}
