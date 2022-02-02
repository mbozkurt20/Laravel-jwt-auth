<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function VerifyEmail($token = null)
    {
        if($token == null) {
            return \MyResponse::error('Invalid Login attempt',401);
        }

        $user = User::where('email_verification_token',$token)->first();

        if($user == null ){
           return \MyResponse::error('Invalid Login attempt',401);
        }

        $user->update([
            'email_verified' => 1,
            'email_verified_at' => Carbon::now(),
            'email_verification_token' => ''
        ]);

       return \MyResponse::success('Your account is activated, you can log in now');
    }

}

