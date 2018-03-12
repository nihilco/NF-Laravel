<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InvoiceTest extends TestCase
{
    public $invoice;

    public function setUp()
    {
        parent::setUp();

        $this->invoice = factory(\App\Models\Invoice::class)->create();
    }

    public function test_an_invoice_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->invoice->owner);
    }

    public function test_an_invoice_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->invoice->creator);
    }

    public function test_an_invoice_has_customer()
    {
        $this->assertInstanceOf(\App\Models\Customer::class, $this->invoice->customer);
    }

    public function test_an_invoice_has_status()
    {
        $this->assertInstanceOf(\App\Models\Status::class, $this->invoice->status);
    }        
}
