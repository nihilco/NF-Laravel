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

    public function test_a_guest_cannot_view_receipts()
    {
	$response = $this->get('/receipts');
	$response->assertStatus(302);
    }
}
