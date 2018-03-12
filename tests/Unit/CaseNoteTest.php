<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CaseNoteTest extends TestCase
{
    public $caseNote;

    public function setUp()
    {
        parent::setUp();

        $this->caseNote = factory(\App\Models\CaseNote::class)->create();
    }

    public function test_a_case_note_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->caseNote->owner);
    }

    public function test_a_case_note_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->caseNote->creator);
    }

    public function test_a_case_note_has_client_case()
    {
        $this->assertInstanceOf(\App\Models\ClientCase::class, $this->caseNote->case);
    }
}
