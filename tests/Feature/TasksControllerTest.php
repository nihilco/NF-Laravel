<?php

namespace Tests\Feature;

use Tests\TestCase;

class TasksControllerTest extends TestCase
{
    public $task;

    public function setUp()
    {
        parent::setUp();

        $this->task = factory(\App\Models\Task::class)->create();
    }

    public function test_a_guest_cannot_view_tasks()
    {
        $response = $this->get('/tasks');
        $response->assertStatus(302);
    }
}
