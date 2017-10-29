<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class AccountsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $account;

    public function setUp()
    {
        parent::setUp();

	$this->account = factory(\App\Models\Account::class)->create();
    }
}
