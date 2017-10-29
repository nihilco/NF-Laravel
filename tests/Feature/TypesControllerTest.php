<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class TypesControllerTest extends TestCase
{
    use DatabaseMigrations;

    public $type;

    public function setUp()
    {
        parent::setUp();

	$this->type = factory(\App\Models\Type::class)->create();
    }
}
