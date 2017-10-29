<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ContactsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $contact;

    public function setUp()
    {
        parent::setUp();

	$this->contact = factory(\App\Models\Contact::class)->create();
    }
}
