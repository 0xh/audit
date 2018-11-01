<?php

namespace App\Listeners;

use OwenIt\Auditing\Events\Audited;

class AuditedListener
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
     * @param  Audited $event
     *
     * @return void
     */
    public function handle(Audited $event)
    {
        //dd('Audited',$event->model,$event->driver);
    }
}
