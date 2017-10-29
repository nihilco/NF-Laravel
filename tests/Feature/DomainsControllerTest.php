<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class DomainsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $domain;

    public function setUp()
    {
        parent::setUp();

	$this->domain = factory(\App\Models\Domain::class)->create();
    }
}
