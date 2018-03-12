<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TaskTest extends TestCase
{
    public $task;

    public function setUp()
    {
        parent::setUp();

        $this->task = factory(\App\Models\Task::class)->create();
    }

    public function test_a_task_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->task->owner);
    }

    public function test_a_task_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->task->creator);
    }
}
