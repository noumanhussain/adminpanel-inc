<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class LeadsCount implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $modelObject;
    private $quoteType;
    private $leadCount;

    /**
     * Create a new event instance.
     */
    public function __construct($leadCount)
    {
        $this->leadCount = $leadCount;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return ['public.'.config('constants.APP_ENV').'.total-leads-count'];
    }

    public function broadcastAs(): string
    {
        return 'leads.count';
    }

    public function broadcastWith(): array
    {
        return [
            'totalLeadsCount' => $this->leadCount,
        ];
    }

}
