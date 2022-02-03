<?php

namespace App\Http\Controllers\Auth;

use App\CustomClass\MyResponse;
use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VerifyController extends Controller
{
    public function VerifyEmail($token = null)
    {
        if($token == null) {
            return MyResponse::error('Invalid Login attempt',401);
        }

        if (! User::where('email_verification_token',$token)->exists()){
            return MyResponse::error('undefined email verify token',401);
        }

        $user = User::where('email_verification_token',$token)->first();

        if($user == null ){
           return MyResponse::error('Invalid Login attempt',401);
        }

        $user->status = true;
        $user->email_verified_at =  Carbon::now();
        $user->email_verification_token = '';
        $user->update();

       return view('auth.welcome');
    }

}

