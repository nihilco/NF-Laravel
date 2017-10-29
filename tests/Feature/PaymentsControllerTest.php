<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PaymentsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $payments;

    public function setUp()
    {
        parent::setUp();

	$this->payment = factory(\App\Models\Payment::class)->create();
    }
}
