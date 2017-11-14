<?php

namespace Tests\Feature;

use Tests\TestCase;

class InvoicesControllerTest extends TestCase
{
    public $invoice;

    public function setUp()
    {
        parent::setUp();

	$this->invoice = factory(\App\Models\Invoice::class)->create();
    }

    public function test_a_guest_cannot_view_invoices()
    {
	$response = $this->get('/invoices');
	$response->assertStatus(302);
    }
}
