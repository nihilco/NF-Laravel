<?php

namespace Tests\Feature;

use Tests\TestCase;

class TransactionsControllerTest extends TestCase
{
    public $transaction;

    public function setUp()
    {
        parent::setUp();

        $this->transaction = factory(\App\Models\Transaction::class)->create();
    }

    public function test_a_guest_cannot_view_transactions()
    {
        $response = $this->get('/transactions');
        $response->assertStatus(302);
    }
}
