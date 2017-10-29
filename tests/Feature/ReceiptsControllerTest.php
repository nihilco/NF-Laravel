<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ReceiptsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $receipt;

    public function setUp()
    {
        parent::setUp();

	$this->receipt = factory(\App\Models\Receipt::class)->create();
    }
}
