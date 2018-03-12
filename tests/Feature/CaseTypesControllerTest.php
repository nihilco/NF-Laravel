<?php

namespace Tests\Feature;

use Tests\TestCase;

class CaseTypesControllerTest extends TestCase
{
    public $caseType;

    public function setUp()
    {
        parent::setUp();

        $this->caseType = factory(\App\Models\CaseType::class)->create();
    }

    public function test_a_guest_cannot_view_case_types()
    {
        $response = $this->get('/case-types');
        $response->assertStatus(302);
    }
}
