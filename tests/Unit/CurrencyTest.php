<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CurrencyTest extends TestCase
{
    public $currency;

    public function setUp()
    {
        parent::setUp();

        $this->currency = factory(\App\Models\Currency::class)->create();
    }

    public function test_a_currency_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->currency->owner);
    }

    public function test_a_currency_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->currency->creator);
    }
}
