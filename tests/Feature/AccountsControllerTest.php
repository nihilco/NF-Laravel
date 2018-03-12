<?php

namespace Tests\Feature;

use Tests\TestCase;

class AccountsControllerTest extends TestCase
{
    public $account;

    public function setUp()
    {
        parent::setUp();

        $this->account = factory(\App\Models\Account::class)->create();
    }

    public function test_a_guest_cannot_view_accounts()
    {
        $response = $this->get('/accounts');
        $response->assertStatus(302);
    }
}
