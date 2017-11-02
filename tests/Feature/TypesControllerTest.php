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
}
