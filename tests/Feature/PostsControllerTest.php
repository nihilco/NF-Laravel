<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class PostsControllerTest extends TestCase
{
    use DatabaseMigrations;
    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_a_user_can_view_posts()
    {
        $response = $this->get('/posts');

        $response->assertStatus(200);
    }
}
