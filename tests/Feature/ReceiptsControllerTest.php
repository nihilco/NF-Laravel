<?php

namespace Tests\Feature;

use Tests\TestCase;

class ReceiptsControllerTest extends TestCase
{
    public $receipt;

    public function setUp()
    {
        parent::setUp();

	$this->receipt = factory(\App\Models\Receipt::class)->create();
    }
}
