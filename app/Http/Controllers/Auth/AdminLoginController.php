<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
	{
		$this->middleware('guest:admin', ['except'=>['logout']]);

	}
    public function showloginform()
    {
    	return view('auth.admin-login');

    }
    public function login(Request $request)
    {
    	//validate the form

        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:8'

        ]);

        //attemp to login

        if(Auth::guard('admin')->attempt(['email'=> $request->email, 'password'=> $request->password ], $request->remember))
        {
            return redirect()->intended(route('admin.dashboard'));
        }
        session()->flash('message','These credentials do not match our records!');
        return redirect()->back()->withInput($request->only('email','remember'));

        //if login successfull then redirect to page

        //if unsuccessfull
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
