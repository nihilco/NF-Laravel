<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AccountTest extends TestCase
{
    public $account;

    public function setUp()
    {
        parent::setUp();

        $this->account = factory(\App\Models\Account::class)->create();
    }

    public function test_an_account_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->account->owner);
    }

    public function test_an_account_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->account->creator);
    }

    public function test_an_account_has_type()
    {
        $this->assertInstanceOf(\App\Models\Type::class, $this->account->type);
    }    
}
