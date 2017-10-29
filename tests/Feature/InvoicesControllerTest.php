<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class InvoicesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $invoice;

    public function setUp()
    {
        parent::setUp();

	$this->invoice = factory(\App\Models\Invoice::class)->create();
    }
}
