<?php

namespace Tests\Feature;

use Tests\TestCase;

class AddressesControllerTest extends TestCase
{
    public $address;

    public function setUp()
    {
        parent::setUp();

	$this->address = factory(\App\Models\Address::class)->create();
    }
}
