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
}
