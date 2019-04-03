<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        // Registered::class => [
        //     SendEmailVerificationNotification::class,
        // ],

        'App\Events\Auth\UserActivationEmail' => [
            'App\Listeners\Auth\SendActivationEmail',
        ],
        'Illuminate\Auth\Events\Login' => [
            'App\Listeners\TraceUserLogin',
        ],
        'Illuminate\Auth\Events\Logout' => [
            'App\Listeners\TraceUserLogout',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
