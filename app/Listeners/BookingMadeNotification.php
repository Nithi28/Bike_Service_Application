<?php

namespace App\Listeners;

use App\Events\BookingMadeEvent;
use App\Mail\BookingMadeMail;
use App\Models\Service;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class BookingMadeNotification
{
    /**
     * Create the event listener.
     */
    
    public function __construct()
    {
        
    }

    /**
     * Handle the event.
     */
    public function handle(BookingMadeEvent $event): void
    {
        Mail::to('admin@admin.com')
            ->queue(new BookingMadeMail($event->service));
    }
}
