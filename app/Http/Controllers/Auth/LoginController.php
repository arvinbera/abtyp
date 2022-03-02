<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

Use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:web', ['except'=>['logout']]);

    }
    public function showloginform()
    {
        return view('auth.login');

    }
    public function login(Request $request)
    {
        //validate the form

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:8'

        ]);

        //attemp to login

        if(Auth::guard('web')->attempt(['email'=> $request->email, 'password'=> $request->password ], $request->remember))
        {
            return redirect()->intended(route('user.stat-dashboard'));
        }
        session()->flash('message','These credentials do not match our records!');
        return redirect()->back()->withInput($request->only('email','remember'));

        //if login successfull then redirect to page

        //if unsuccessfull
    }

    public function logout()
    {
        Auth::guard('web')->logout();
        return redirect('/login');
    }
}
