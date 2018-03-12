<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewTest extends TestCase
{
    public $view;

    public function setUp()
    {
        parent::setUp();

        $this->view = factory(\App\Models\View::class)->create();
    }

    public function test_a_view_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->view->owner);
    }

    public function test_a_view_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->view->creator);
    }

    public function test_a_view_has_device()
    {
        $this->assertInstanceOf(\App\Models\Device::class, $this->view->device);
    }

    public function test_a_view_has_resource()
    {
        $this->assertInstanceOf(\App\Models\Resource::class, $this->view->resource);
    }    
}
