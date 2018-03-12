<?php

namespace Tests\Feature;

use Tests\TestCase;

class ChannelsControllerTest extends TestCase
{
    public $channel;
    
    public function setUp()
    {
        parent::setUp();

        $this->channel = factory(\App\Models\Channel::class)->create();
    }

    public function test_a_guest_can_view_channels()
    {
        $response = $this->get('/channels');
        
        $response->assertSee($this->channel->title);
    }
    
    public function test_a_guest_can_view_a_channel()
    {
        $response = $this->get($this->channel->path());
        
        $response->assertSee($this->channel->title);
    }
}
