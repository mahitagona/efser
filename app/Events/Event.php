<?php

namespace App\Events;

abstract class Event
{
   /**
 * Register any other events for your application.
 *
 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
 * @return void
 */
public function boot(DispatcherContract $events)
{
    parent::boot($events);

    // Fired on each authentication attempt...
    $events->listen('auth.attempt', function ($credentials, $remember, $login) {
        //
    });

    // Fired on successful logins...
    $events->listen('auth.login', function ($user, $remember) {
        //
    });

    // Fired on logouts...
    $events->listen('auth.logout', function ($user) {
        //
    });
} //
}
