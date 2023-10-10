<?php

namespace App\Listeners;

use App\Events\BookingReadyEvent;
use App\Mail\BookingReadyMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class BookingReadyNotification
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
    public function handle(BookingReadyEvent $event): void
    {
        $email = $event->user->email;
        Mail::to($email)
        ->queue(new BookingReadyMail($event->service));
    }
}
