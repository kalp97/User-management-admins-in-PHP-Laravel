<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
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
        $this->middleware('guest', ['except' => ['logout', 'userLogout']]);
    }

    public function userLogout()
    {
       // echo  \Session::get('email');
       // User::where('email','=', \Session::get('email'))->update(array(
         //   'is_active'=> 0,
        //));
       //\Session::forget('email');

        $user = Auth::user();
        User::where('email','=', $user->email )->update(array(
            'is_active'=>0
        ));
        \Session::forget('email',$user->email);

        Auth::guard('web')->logout();

        return redirect('/');
    }
}
