<?php

namespace Tests\Feature;

use Tests\TestCase;

class TypesControllerTest extends TestCase
{
    public $type;
    
    public function setUp()
    {
        parent::setUp();
        
        $this->type = factory(\App\Models\Type::class)->create();
    }

    public function test_a_guest_cannot_view_types()
    {
        $response = $this->get('/types');
        $response->assertStatus(302);
    }
    
    public function test_a_guest_ca_view_a_type()
    {
        $response = $this->get($this->type->path());
        
        $response->assertSee($this->type->name);
    }	
}
