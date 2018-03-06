<?php

namespace App\Http\Controllers\Auth;

# add new
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/welcome';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        # $this->middleware('guest')->except('logout');
    }


    
    # login auth
    public function login(Request $req) {
        $password = $req['password'];
        $email = $req['email'];

        # c1 use => Auth::attempt(array)
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            # echo $req;
            $loginAuth = Auth::user();
            return view('pages\profile',['user'=> $loginAuth]);
        } else {
            return view('pages\login',['email'=>$email, 'error'=>'login faild']);
        }

      
    }


    # profile
    public function profile() {
        return view('pages\profile');
    }


    # logout
    public function logout() {
        Auth::logout();      
        return view('pages\login');
    }
}
