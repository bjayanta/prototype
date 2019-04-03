<?php

namespace App\Listeners;

use App\Models\Accesslog;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TraceUserLogin
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
     * @param  Login  $event
     * @return void
     */
    public function handle(Login $event) {
        // dd($event->user->toArray());
        // dd($event->guard);

        $attendance = new Accesslog();
        $attendance->user = $event->user->id;
        $attendance->ip = \Request::ip();
        $attendance->genus = $event->guard; // admin or web
        $attendance->save();
    }

}
