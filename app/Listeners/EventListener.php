<?php

namespace App\Listeners;

use App\Events\Event;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class EventListener
{
    public function __construct()
    {
        //
    }

    public function handle(Event $event)
    {
        // dd($event);
    }
}
