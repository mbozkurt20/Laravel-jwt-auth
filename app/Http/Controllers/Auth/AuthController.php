<?php

namespace App\Http\Controllers\Auth;

use App\CustomClass\Control;
use App\CustomClass\MyResponse;
use App\Events\AuthSaved;
use App\Mail\Auth\VerificationEmail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;

class AuthController extends Controller
{

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'full_name' => 'required|string|min:4|max:100',
            'email' => 'required|string|email|max:100|unique:users',
            'username' => 'required|string|min:8|max:100|unique:users',
            'password' => 'required|string|confirmed|min:8',
        ]);

        if ($request->phone != null ){
            $validator = Validator::make($request->all(), [
                'phone' => 'numeric|min:11',
            ]);
        }
        if ($request->identity != null ){
            $validator = Validator::make($request->all(), [
                'identity' => 'numeric|min:11',
            ]);

        }

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = time() . '-' . Str::slug($request->username) . '.' . $photo->extension();
            $photo->move(storage_path('app/public/users'), $photoName);
            $photo = $photoName;
            $user['photo'] = $photo;
        }

        if (!Control::passwordControl($request->password)){
            return MyResponse::error('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character',407);
        }

        $user = new User();
        $user['full_name'] = $request->full_name;
        $user['username'] = $request->username;
        $user['email'] = $request->email;
        $user['status'] = 1;
        $user['phone'] = $request->phone;
        $user['identity'] = $request->identity;
        $user['password'] = Hash::make($request->password);
        $user['email_verification_token'] = Str::random(32);
        $user->save();

        $user->attachRole($request->roleType);

        event(new AuthSaved($user)); // kayıt olan kişiye onay maili gönderilme işlemi

        return response()->json([
            'message' => 'Your registration has been successfully completed and an account confirmation e-mail has been sent to you',
            'user' => $user
        ], 201);
    }


    public function login(Request $request)
    {

        if ($request->email) {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required|string|min:6',
            ]);
        }
        if ($request->username) {
            $validator = Validator::make($request->all(), [
                'username' => 'required',
                'password' => 'required|string|min:6',
            ]);
        }

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        if (!$token = auth()->attempt($validator->validated())) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        if (\auth()->user()->status == false) {
            return MyResponse::error('Sorry, you account no active');
        }

        return $this->respondWithToken($token);

    }

    /**
     * Logout user
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout()
    {
        try {
            auth()->logout();
            return MyResponse::success('Logout Successfully', null, 200);
        } catch (Exception $e) {
            return MyResponse::error('Sorry, something went wrong', 400);
        }
    }

    /**
     * Refresh token.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function refresh()
    {
        return $this->respondWithToken(auth()->refresh());
    }

    /**
     * Get user profile.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function profile()
    {
        return response()->json([
            'message' => 'Profile Information',
            'user' => \auth()->user()
        ], 200);
    }

    public function profileEdit(Request $request)
    {
        try {
            $user = Auth::user();
            $validator = Validator::make($request->all(), [
                'phone' => 'required|numeric',
                'identity' => 'required|numeric',
                'username' => 'required|string',
                'email' => 'required|email',
            ]);

            if ($user->email != $request->email){
                $validator = Validator::make($request->all(), [
                    'email' => 'unique:users',
                ]);
            }
            if ($user->username != $request->username){
                $validator = Validator::make($request->all(), [
                    'username' => 'unique:users',
                ]);
            }

            if ($validator->fails()) {
                return MyResponse::error($validator->errors());
            }


            $user['email'] = $request->email;
            $user['phone'] = $request->phone;
            $user['identity'] = $request->identity;
            $user['username'] = $request->username;

            if ($request->hasFile('photo')) {
                $photo = $request->photo;
                $photoName = time() . '-' . Str::slug($request->username) . '.' . $photo->extension();
                $photo->move(storage_path('app/public/users'), $photoName);
                $photo = $photoName;
                $user['photo'] = $photo;
            }

            $user->update();
            return response()->json(['message' => 'user update successfully', 'user' => \auth()->user()], 201);
        }catch (\Exception $e){
            return response()->json($e,422);
        }

    }

    public function passwordUpdate(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        if (!Control::passwordControl($request->new_password)){
            return MyResponse::error('Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character',400);
        }

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $user = Auth::user();
        if (password_verify($request->password, $user->password)) {
            $user['password'] = Hash::make($request->new_password);
            $user->update();
            return MyResponse::success('Success password updated');
        } else {
            return MyResponse::error('You entered your current password incorrectly',400);
        }
    }

    /**
     * Get the token array structure.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL() * 60,
            'user' => Auth::user()
        ]);
    }
}
