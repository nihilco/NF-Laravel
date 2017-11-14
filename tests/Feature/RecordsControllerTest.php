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

    public function test_a_guest_cannot_view_records()
    {
	$response = $this->get('/records');
	$response->assertStatus(302);
    }
}
