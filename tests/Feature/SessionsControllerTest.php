<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class SessionsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $session;

    public function setUp()
    {
        parent::setUp();

	$this->session = factory(\App\Models\Session::class)->create();
    }
}
