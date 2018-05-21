<?php

namespace App\Http\Controllers\DosenAuth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = '/dosen';

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    public function guard()
    {
        return auth()->guard('dosen');
    }

    public function username()
    {
        return 'nip';
    }

    public function showLoginForm()
    {
        return view('dosenauth.login');
    }
}
