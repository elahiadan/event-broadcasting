<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BroadcastWithPusherEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $data;
    public function __construct()
    {
        $this->data = "Broadcasting with Pusher";
    }
    public function broadcastOn()
    {
        return ['channel-name-broadcast-with-pusher'];
    }

    public function broadcastAs()
    {
        return 'channel-name-broadcast-with-pusher';
    }
}
