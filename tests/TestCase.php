<?php

namespace Tests;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication, DatabaseTransactions;

    public function login($user = null)
    {
	if(!$user) {
	    $user = factory(\App\Models\User::class)->create();
	}
	
        $this->be($user);

	return $user;
    }
}
