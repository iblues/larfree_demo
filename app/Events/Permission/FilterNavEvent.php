<?php

namespace App\Events\Permission;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class FilterNavEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    protected $nav;
    protected $originNav;
    protected $model;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($nav, $model)
    {
        $this->originNav = $nav;
        $this->nav = $nav;
        $this->model = $model;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
