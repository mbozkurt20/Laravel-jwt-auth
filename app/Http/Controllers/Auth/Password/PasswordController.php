<?php

namespace App\Http\Controllers\Auth\Password;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;

class PasswordController extends Controller
{
   public function passwordEmail(Request $request){

       $request->validate(['email' => 'required|email']);

       $status = Password::sendResetLink(
           $request->only('email')
       );

       return $status === Password::RESET_LINK_SENT
           ? back()->with(['status' => __($status)])
           : back()->withErrors(['email' => __($status)]);
   }

   public function token($token){
       return view('auth.reset-password', ['token' => $token]);
   }

   public function resetPassword(Request $request){
       $request->validate([
           'token' => 'required',
           'email' => 'required|email',
           'password' => 'required|min:8|confirmed',
       ]);

       $status = Password::reset(
           $request->only('email', 'password', 'password_confirmation', 'token'),
           function ($user, $password) {
               $user->forceFill([
                   'password' => Hash::make($password)
               ])->setRememberToken(Str::random(60));

               $user->save();

               event(new PasswordReset($user));
           }
       );

       return $status === Password::PASSWORD_RESET
           ? redirect()->route('login')->with('status', __($status))
           : back()->withErrors(['email' => [__($status)]]);
   }
}
