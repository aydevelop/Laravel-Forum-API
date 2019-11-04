<?php

namespace App\Listeners;

use App\Events\QEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class QEventListener
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
     * @param  QEvent  $event
     * @return void
     */
    public function handle(QEvent $event)
    {
        //
    }
}
