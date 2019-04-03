<?php

namespace App\Listeners;

use App\Models\Accesslog;
use Illuminate\Auth\Events\Logout;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TraceUserLogout
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
     * @param  Logout  $event
     * @return void
     */
    public function handle(Logout $event) {
        // dd($event->user);

        $where = [
            ['user', '=', $event->user->id],
            ['ip', '=', \Request::ip()]
        ];

        $log = Accesslog::where($where)->orderBy('id', 'DESC')->first();
        // dd($log);

        $where[] = ['id', '=', $log->id];
        // dd($where);

        $log = Accesslog::findOrFail($log->id);
        $log->status = 'out';
        $log->save();
    }
}
