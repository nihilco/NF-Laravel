<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ContactTest extends TestCase
{
    public $contact;

    public function setUp()
    {
        parent::setUp();

        $this->contact = factory(\App\Models\Contact::class)->create();
    }

    public function test_a_contact_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->contact->owner);
    }

    public function test_a_contact_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->contact->creator);
    }        
}
