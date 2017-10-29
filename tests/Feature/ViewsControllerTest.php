<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ViewsControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $view;

    public function setUp()
    {
        parent::setUp();

	$this->view = factory(\App\Models\View::class)->create();
    }
}
