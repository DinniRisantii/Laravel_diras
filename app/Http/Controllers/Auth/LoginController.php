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
<<<<<<< HEAD
     
=======
    
>>>>>>> Episode-9
=======
    
>>>>>>> Episode-9

    /**
     * Create a new controller instance.
     *
<<<<<<< HEAD
<<<<<<< HEAD
     * @return void 
=======
     * @return void
>>>>>>> Episode-9
=======
     * @return void
>>>>>>> Episode-9
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
<<<<<<< HEAD
<<<<<<< HEAD

    protected function redirectTo()
    {
        return route('admin.home');
    } 
=======
=======
>>>>>>> Episode-9
    protected function redirectTo()
    {
        return route('admin.home');
    }
<<<<<<< HEAD
>>>>>>> Episode-9
=======
>>>>>>> Episode-9
}
