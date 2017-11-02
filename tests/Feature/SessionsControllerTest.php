<?php

namespace Tests\Feature;

use Tests\TestCase;

class SessionsControllerTest extends TestCase
{
    public $session;

    public function setUp()
    {
        parent::setUp();

	$this->session = factory(\App\Models\Session::class)->create();
    }
}
