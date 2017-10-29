<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class RecordsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $record;

    public function setUp()
    {
        parent::setUp();

	$this->record = factory(\App\Models\Record::class)->create();
    }
}
