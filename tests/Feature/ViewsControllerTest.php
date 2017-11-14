<?php

namespace Tests\Feature;

use Tests\TestCase;

class ViewsControllerTest extends TestCase
{
    public $view;

    public function setUp()
    {
        parent::setUp();

	$this->view = factory(\App\Models\View::class)->create();
    }

    public function test_a_guest_cannot_view_views()
    {
	$response = $this->get('/views');
	$response->assertStatus(302);
    }

}
