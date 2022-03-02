<?php

namespace App\Http\Controllers\Branch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use DB;

use Validator;
use Session;
use Hash;
use App\Branch;

class BranchController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:branch');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('branch/branch-report');
    }
    public function stat_dashboard()
    {
        return view('branch/stat-dashboard');
    }
    
     public function change_password_form()
    {
        $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
        $branch_details = DB::Table('branches')->where('id',$branch_id)
    	->first();
        
        return view('branch/change-password',compact('branch_details'));
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
 
              $users =Branch::find(Auth::user()->id);
              $users->password = bcrypt($request->newpassword);
              Branch::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
 
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