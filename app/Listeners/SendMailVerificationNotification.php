<?php

namespace App\Listeners;

use App\Event\RegisteredSendMail;
use App\Mail\NotificationEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMailVerificationNotification
{

    /**
     * Handle the event.
     *
     * @param  \App\Event\RegisteredSendMail  $event
     * @return void
     */
    public function handle(RegisteredSendMail $event)
    {
        \Mail::to($event->isMail())->locale('tl')->send(new NotificationEmail());
    }
}
