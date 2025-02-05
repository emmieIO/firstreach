<?php

namespace App\Listeners;

use App\Events\ShipmentCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\ShipmentCreatedMail;

class ShipmentCreatedListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ShipmentCreated $event): void
    {
       $reciever_mail = $event->shipment->receiver_email;
       Mail::to($reciever_mail)->send(new ShipmentCreatedMail($event->shipment));
    }
}
