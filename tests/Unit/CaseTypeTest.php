<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CaseTypeTest extends TestCase
{
    public $caseType;

    public function setUp()
    {
        parent::setUp();

        $this->caseType = factory(\App\Models\CaseType::class)->create();
    }

    public function test_a_case_type_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->caseType->owner);
    }

    public function test_a_case_type_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->caseType->creator);
    }    
}
