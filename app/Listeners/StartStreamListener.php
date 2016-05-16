<?php

namespace App\Listeners;

use App\Events\StartStream;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StartStreamListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  StartStream  $event
     * @return void
     */
    public function handle(StartStream $event)
    {
        //
    }
}
