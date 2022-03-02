<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Branch;
use Validator;
use Session;
use Hash;
use DB;

class BranchManagementController extends Controller
{
	 public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function add_branch_form()
    {
    	$state_list=DB::table('state')->get();
    	return view('admin/add-branch',compact('state_list'));
    }

    public function add_branch(Request $request)
    {
    	$validator=Validator::make($request->all(),[
		'name'=>'required',
		'email'=>'required|unique:branches',
		'state_id'=>'required',

		
		'password'=>'required|min:8',


		
		],
		[
		'name.required'=>'Branch Name Required',
		'email.required'=>'Email Required',
		'state_id.required'=>'State Required',

	
		'password.required'=>'Password Required',

		'email.unique'=>'Email already exists',

				
		]);
		
		if($validator->fails())
		{
			return redirect('admin/add-branch')->withErrors($validator)->withInput();
			
		}
		$data = $request->all();
		$data=request()->except(['_token']);
		$data['password']= Hash::make($data['password']);
		
		//dd($data);
		$branches=new Branch();
		$branches->create($data);
		Session::flash('message','Parishad Successfully Added.');
		return redirect('admin/branch-list');
    }



    public function branch_list()
    {
    	$branch_list=Branch::get();
    	return view('admin/branch-list', compact('branch_list'));
    }
    
    public function branch_edit_form($id){
        $branch=Branch::where('id',$id)->first();
        $state_list=DB::table('state')->get();
        //dd($branch);
    	return view('admin/branch-edit',compact('branch','state_list'));
    }
    
    public function branch_update(Request $request){
        $branch=Branch::where('id',$request->edit_id)->first();
        $branch->name = $request->name;
        $branch->email = $request->email;
        $branch->state_id = $request->state_id;
        if($branch->update()){
            Session::flash('message','Parishad Successfully UPdated.');
		    return redirect('admin/branch-list');
        }
    }
}
