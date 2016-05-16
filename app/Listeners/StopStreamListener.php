<?php

namespace App\Listeners;

use App\Events\StopStream;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class StopStreamListener
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
     * @param  StopStream  $event
     * @return void
     */
    public function handle(StopStream $event)
    {
        //
    }
}
