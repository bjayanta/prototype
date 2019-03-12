<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => [
                'required', 
                'string',
				/*
				Rule::exists('users')->where(function($query) {
                    $query->where('status', true);
                }),
				*/
            ],
            'password' => 'required|string',
        ], $this->validationError());
    }
	
	/**
     * Get the needed authorization credentials from the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    protected function credentials(Request $request)
    {
        $field = filter_var($request->get($this->username()), FILTER_VALIDATE_EMAIL)
            ? $this->username()
            : 'username';
			
        return [
            $field => $request->get($this->username()),
            'password' => $request->password,
        ];
    }
	
	/*
    protected function credentials(Request $request)
    {
        return $request->only($this->username(), 'password');
    }
	*/

    /**
     * Get the validation error for login
     * 
     * @return array
     */
    public function validationError() {
        return [$this->username() . '.exists' => 'The selected email is invalid or you need to activate your account.'];
    }


}
