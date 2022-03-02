<?php

namespace App\Http\Controllers\Branch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Branch;
use App\User;
use App\Model\Userbranch;
use App\Model\Userpermission;
use Validator;
use Session;
use Hash;
use DB;
use Auth;


class UserManagementController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:branch');
    }

     public function user_list()
    {
    	$user_exist = Auth::guard('branch')->user();
     
    	$User_list=DB::table('users')
        			->leftJoin('userbranches','userbranches.user_id','users.id')
                    ->where('userbranches.branch_id',$user_exist->id)
                    ->select('users.*')
    	            ->get();
    	return view('branch/user-list', compact('User_list'));
    }
}
