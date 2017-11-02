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
}
