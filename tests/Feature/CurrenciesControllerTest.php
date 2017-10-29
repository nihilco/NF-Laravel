<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CurrenciesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $currency;

    public function setUp()
    {
        parent::setUp();

	$this->currency = factory(\App\Models\Currency::class)->create();
    }
}
