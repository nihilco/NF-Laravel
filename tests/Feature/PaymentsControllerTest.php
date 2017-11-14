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

    public function test_a_guest_cannot_view_payments()
    {
	$response = $this->get('/payments');
	$response->assertStatus(302);
    }
}
