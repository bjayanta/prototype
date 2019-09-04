<?php

namespace App\Http\Controllers\Api;

use Validator;
use App\Models\User\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Events\Auth\UserActivationEmail;

class CredentialController extends Controller {
    public function login(Request $request) {
        if(Auth::attempt([(filter_var($request['email'], FILTER_VALIDATE_EMAIL)) ? 'email' : 'username' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();

            // set the app name
            $success['token'] = $user->createToken('MyApp')->accessToken;

            return response()->json(['success' => $success], 200);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }

    public function register(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required|alpha_dash|max:255|unique:users',
            'phone' => 'required|unique:users,phone',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'cpassword' => 'required|same:password',
        ]);

        if($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        $input = $request->all();

        $user = User::create([
            'name' => $input['name'],
            'username' => $input['username'],
            'phone' => $input['phone'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
            'activation_token' => Str::random(40),
        ]);

        $success['token'] = $user->createToken('MyApp')->accessToken;
        $success['name'] = $user->name;

        // sending mail for email verification
        event(new UserActivationEmail($user));

        return response()->json(['success' => $success], 200);
    }

}
