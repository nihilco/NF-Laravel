<?php

namespace Tests\Feature;

use Tests\TestCase;

class PublishersControllerTest extends TestCase
{
    public $publisher;

    public function setUp()
    {
        parent::setUp();

	$this->publisher = factory(\App\Models\Publisher::class)->create();
    }
}
