<?php

namespace App\Listeners;

use App\Events\receipecreateevent;
use App\Mail\ReceipeStored;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class receipecreatelistener
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
     * @param  receipecreateevent  $event
     * @return void
     */
    public function handle(receipecreateevent $event)
    {
        //
        // Mail::to('kyawkyawlin19954@gmail.com')->send(new ReceipeStored($event->receipe));
    }
}
