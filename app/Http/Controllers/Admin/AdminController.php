<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

use Validator;
use Session;
use Hash;
use App\Admin;


class AdminController extends Controller
{ /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/branch-report');
    }
    public function change_password_form()
    {
        $admin =auth::guard('admin')->user();
        $admin_id=$admin->id;
        $admin_details = DB::Table('admins')->where('id',$admin_id)
    	->first();
        
        return view('admin/change-password',compact('admin_details'));
    }
     public function password_upadte(Request $request)
    {
        $this->validate($request, [
 
        'oldpassword' => 'required',
        'newpassword' => 'required|min:8',
        ]);
 
 
 
       $hashedPassword = Auth::user()->password;
 
       if (\Hash::check($request->oldpassword , $hashedPassword )) {
 
         if (!\Hash::check($request->newpassword , $hashedPassword)) {
 
              $users =Admin::find(Auth::user()->id);
              $users->password = bcrypt($request->newpassword);
              Admin::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
 
              session()->flash('message','Password updated successfully!');
              return redirect()->back();
            }
 
            else{
                  session()->flash('message','New password can not be the old password!');
                  return redirect()->back();
                }
 
           }
 
          else{
               session()->flash('message','Old password doesnt matched! ');
               return redirect()->back();
             }
 
       }
}