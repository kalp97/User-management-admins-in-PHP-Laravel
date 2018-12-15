<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        User::where('email','=', $user->email )->update(array(
            'is_active'=>1
        ));
       \Session::put('email',$user->email);

        $questions = $user->questions()->paginate(6);
        return view('home')->with('questions', $questions);
    }
}
