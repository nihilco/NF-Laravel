<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChannelTest extends TestCase
{
    public $channel;

    public function setUp()
    {
        parent::setUp();

        $this->channel = factory(\App\Models\Channel::class)->create();
    }

    public function test_a_channel_has_owner()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->channel->owner);
    }

    public function test_a_channel_has_creator()
    {
        $this->assertInstanceOf(\App\Models\User::class, $this->channel->creator);
    }
}
