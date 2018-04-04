<?php

namespace Tests\Feature;

use Tests\TestCase;

class FavoritesControllerTest extends TestCase
{
    public $favorite;

    public function setUp()
    {
        parent::setUp();
    }
    
    public function test_a_guest_cannot_view_favorites()
    {
        $response = $this->get('/favorites');
        $response->assertStatus(302);
    }
}
