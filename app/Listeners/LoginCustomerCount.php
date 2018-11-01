<?php

namespace App\Listeners;
use Illuminate\Auth\Events\Login;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class LoginCustomerCount
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
     * @param  LoginCustomer  $event
     * @return void
     */
    public function handle(Login $event)
    {
        $event->user->login_latest = Carbon::now(); //set login in time to now
        $event->user->login_times++;
        $event->user->save();
    }
}
