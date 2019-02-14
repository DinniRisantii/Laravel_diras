<?php

namespace App\Http\Controllers\Auth;

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
<<<<<<< HEAD
     
=======
    
>>>>>>> Episode-9

    /**
     * Create a new controller instance.
     *
<<<<<<< HEAD
     * @return void 
=======
     * @return void
>>>>>>> Episode-9
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
<<<<<<< HEAD

    protected function redirectTo()
    {
        return route('admin.home');
    } 
=======
    protected function redirectTo()
    {
        return route('admin.home');
    }
>>>>>>> Episode-9
}
