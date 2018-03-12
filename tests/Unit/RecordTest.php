<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RecordTest extends TestCase
{
    public $record;

    public function setUp()
    {
        parent::setUp();

        $this->record = factory(\App\Models\Record::class)->create();
    }

    public function test_a_record_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->record->owner);
    }

    public function test_a_record_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->record->creator);
    }

    public function test_a_record_has_zone()
    {
        $this->assertInstanceOf(\App\Models\Zone::class, $this->record->zone);
    }

    public function test_a_record_has_type()
    {
        $this->assertInstanceOf(\App\Models\Type::class, $this->record->type);
    }    
}
