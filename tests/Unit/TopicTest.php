<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TopicTest extends TestCase
{
    public $topic;

    public function setUp()
    {
        parent::setUp();

        $this->topic = factory(\App\Models\Topic::class)->create();
    }

    public function test_a_topic_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->topic->owner);
    }

    public function test_a_topic_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->topic->creator);
    }

    public function test_a_topic_has_channel()
    {
        $this->assertInstanceOf(\App\Models\Channel::class, $this->topic->channel);
    }    
}
