<?php

namespace App\Listeners;

use App\Events\AuthSaved;
use App\Mail\Auth\VerificationEmail;
use App\Models\User;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class AuthVerification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\AuthSaved  $event
     * @return void
     */
    public function handle(AuthSaved $event)
    {
        Mail::send(new VerificationEmail($this->user));
    }
}
