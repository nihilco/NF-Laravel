<?php

namespace Tests\Feature;

use Tests\TestCase;

class PaymentsControllerTest extends TestCase
{
    public $payments;

    public function setUp()
    {
        parent::setUp();

	$this->payment = factory(\App\Models\Payment::class)->create();
    }
}
