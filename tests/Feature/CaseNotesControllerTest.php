<?php

namespace Tests\Feature;

use Tests\TestCase;

class CaseNotesControllerTest extends TestCase
{
    public $caseNote;

    public function setUp()
    {
        parent::setUp();

        $this->caseNote = factory(\App\Models\CaseNote::class)->create();
    }

    public function test_a_guest_cannot_view_case_notes()
    {
        $response = $this->get('/case-notes');
        $response->assertStatus(302);
    }
}
