<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Http\Controllers\Auth\RegisterController;

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
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $reg = new RegisterController();
        //$reg->create(['name' => 'Admin', 'email' => 'alex.drobot22@gmail.com', 'password' => 'admin1111']);

        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request) {
        $this->guard()->logout();
        return redirect('/login');
    }
}
