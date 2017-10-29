<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AddressesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $address;

    public function setUp()
    {
        parent::setUp();

	$this->address = factory(\App\Models\Address::class)->create();
    }
}
