<?php

namespace App\Services;   
  
use Illuminate\Support\Facades\Mail;
use App\Mail\LoginSuccessMail;
use App\Models\User;

class UserFetchService
{
    public function sendMail( string  $user):void
    {
        Mail::to($user)->send(new LoginSuccessMail($user));
    }
}