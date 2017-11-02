<?php

namespace Tests\Feature;

use Tests\TestCase;

class RecordsControllerTest extends TestCase
{
    public $record;

    public function setUp()
    {
        parent::setUp();

	$this->record = factory(\App\Models\Record::class)->create();
    }
}
