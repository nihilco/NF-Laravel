<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TransactionTest extends TestCase
{
    public $transaction;

    public function setUp()
    {
        parent::setUp();

        $this->transaction = factory(\App\Models\Transaction::class)->create();
    }

    public function test_a_transaction_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->transaction->owner);
    }

    public function test_a_transaction_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->transaction->creator);
    }

    public function test_a_transaction_has_customer()
    {
        $this->assertInstanceOf(\App\Models\Customer::class, $this->transaction->customer);
    }

    public function test_a_transaction_has_type()
    {
        $this->assertInstanceOf(\App\Models\Type::class, $this->transaction->type);
    }    
}
