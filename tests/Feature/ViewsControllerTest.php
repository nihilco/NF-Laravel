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
}
