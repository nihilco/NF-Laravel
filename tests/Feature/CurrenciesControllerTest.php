<?php

namespace Tests\Feature;

use Tests\TestCase;

class CurrenciesControllerTest extends TestCase
{
    public $currency;

    public function setUp()
    {
        parent::setUp();

	$this->currency = factory(\App\Models\Currency::class)->create();
    }
}
