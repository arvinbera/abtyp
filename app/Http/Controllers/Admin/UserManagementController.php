<?php

namespace App\Http\Controllers\Admin;

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


class UserManagementController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:admin');
    }


    public function add_user_form()
    {
    	$branch_list=Branch::get();
        $state_list=DB::table('state')->get();
    	return view('admin/add-user', compact('branch_list','state_list'));
    }

    public function add_user(Request $request)
    {
    	$validator=Validator::make($request->all(),[
		'name'=>'required',
		'email'=>'required|unique:users',
		
        'state' => 'required',

		'address'=>'required',
		'password'=>'required|min:8',


		
		],
		[
		'name.required'=>'Name Required',
		'email.required'=>'Email Required',
		'address.required'=>'Address Required',
		'password.required'=>'Password Required',
        'state.required'=>'State Required',

		'email.unique'=>'Email already exists',
		


				
		]);
		
		if($validator->fails())
		{
			return redirect('admin/add-user')->withErrors($validator)->withInput();
			
		}
		
		$user = new User([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'address' => $request->input('address'),
            'phone_no' => $request->input('phone_no'),
            'state' => $request->input('state'),
            
            'password' => bcrypt($request->input('password')),
        ]);

        $user->save();

       /* $branch_id = $request->branch_id;
		

		foreach($branch_id as $key => $no)
		{
		    $input['branch_id'] = $no;
		    $input['user_id'] = $user->id;

		    

		    Userbranch::create($input);

		}*/


		$Userpermission = new Userpermission([
			'user_id' => $user->id,
            'seva_atdc' => $request->input('seva_atdc'),
            'seva_mbdd' => $request->input('seva_mbdd'),
            'seva_ttf' => $request->input('seva_ttf'),
            'seva_yuva_vahini' => $request->input('seva_yuva_vahini'),
            'seva_eye_donation' => $request->input('seva_eye_donation'),
            'seva_ampk' => $request->input('seva_ampk'),
            'seva_atjh' => $request->input('seva_atjh'),
            'seva_choka_satkar' => $request->input('seva_choka_satkar'),
            'sanskar_jain_sanskar_vidhi' => $request->input('sanskar_jain_sanskar_vidhi'),
            'sanskar_samayik_sadhak' => $request->input('sanskar_samayik_sadhak'),
            'sanskar_tapoyagya' => $request->input('sanskar_tapoyagya'),
            'sanskar_cps' => $request->input('sanskar_cps'),
            'sanskar_pd' => $request->input('sanskar_pd'),
            'sanskar_barah_vrat' => $request->input('sanskar_barah_vrat'),
            'sanskar_twenty_five_bol' => $request->input('sanskar_twenty_five_bol'),
            'sanskar_jain_vidhya_katyashala' => $request->input('sanskar_jain_vidhya_katyashala'),
            'sanskar_yuva_divas' => $request->input('sanskar_yuva_divas'),
            'sangathan_tkm' => $request->input('sangathan_tkm'),
            'sangathan_yuva_sangam	' => $request->input('sangathan_yuva_sangam	'),
            'sangathan_fit_yuva' => $request->input('sangathan_fit_yuva'),
            'sangathan_jtn' => $request->input('sangathan_jtn'),
            'sangathan_sankalp_sangathan_yatra	' => $request->input('sangathan_sankalp_sangathan_yatra	'),
            'sangathan_sargam' => $request->input('sangathan_sargam'),
            'sangathan_abtyp_direct' => $request->input('sangathan_abtyp_direct'),
          
       
        ]);

        $Userpermission->save();

		Session::flash('message','User Successfully Added.');
		return redirect('admin/user-list');
    }



    public function user_list()
    {
    	$User_list=DB::table('users')
    	            ->get();
    	return view('admin/user-list', compact('User_list'));
    }
    
    public function user_edit($id){
        $user = User::where('id',$id)->first();
        $user_permission = Userpermission::where('user_id',$id)->first();
        $user_branch = Userbranch::where('user_id',$id)->get();
        $state_list=DB::table('state')->get();
        $branch_list=Branch::get();
        //dd($user_branch);
        return view('admin/user-edit',compact('user','user_permission','user_branch','state_list','branch_list'));
    }
    
    public function user_update(Request $request){
        //dd($request->all());
        //User Update
        $user = User::where('id',$request->edit_user_id)->first();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone_no = $request->phone_no;
        $user->state = $request->state;
        $user->address = $request->address;
        $user->update();
        
        //Branch Update
        $user_branch = Userbranch::where('user_id',$request->edit_user_id)->get();
        foreach($user_branch as $ub){
            $ub->delete();
        }
        /*$branch_id = $request->branch_id;
		foreach($branch_id as $key => $no){
		    $input['branch_id'] = $no;
		    $input['user_id'] = $user->id;
		    Userbranch::create($input);
		}*/
		
		//USerperission Edit
        $user_permission = Userpermission::where('id',$request->edit_user_permission_id)->first();
		    $user_permission->seva_atdc=$request->seva_atdc;
            $user_permission->seva_mbdd=$request->seva_mbdd;
            $user_permission->seva_ttf=$request->seva_ttf;
            $user_permission->seva_yuva_vahini=$request->seva_yuva_vahini;
            $user_permission->seva_eye_donation=$request->seva_eye_donation;
            $user_permission->seva_ampk=$request->seva_ampk;
            $user_permission->seva_atjh=$request->seva_atjh;
            $user_permission->seva_choka_satkar=$request->seva_choka_satkar;
            $user_permission->sanskar_jain_sanskar_vidhi=$request->sanskar_jain_sanskar_vidhi;
            $user_permission->sanskar_samayik_sadhak=$request->sanskar_samayik_sadhak;
            $user_permission->sanskar_tapoyagya=$request->sanskar_tapoyagya;
            $user_permission->sanskar_cps=$request->sanskar_cps;
            $user_permission->sanskar_pd=$request->sanskar_pd;
            $user_permission->sanskar_barah_vrat=$request->sanskar_barah_vrat;
            $user_permission->sanskar_twenty_five_bol=$request->sanskar_twenty_five_bol;
            $user_permission->sanskar_jain_vidhya_katyashala=$request->sanskar_jain_vidhya_katyashala;
            $user_permission->sanskar_yuva_divas=$request->sanskar_yuva_divas;
            $user_permission->sangathan_tkm=$request->sangathan_tkm;
            $user_permission->sangathan_yuva_sangam=$request->sangathan_yuva_sangam;
            $user_permission->sangathan_fit_yuva=$request->sangathan_fit_yuva;
            $user_permission->sangathan_jtn=$request->sangathan_jtn;
            $user_permission->sangathan_sankalp_sangathan_yatra=$request->sangathan_sankalp_sangathan_yatra;
            $user_permission->sangathan_sargam=$request->sangathan_sargam;
            $user_permission->sangathan_abtyp_direct=$request->sangathan_abtyp_direct;
        $user_permission->update();
        
        Session::flash('message','User Successfully Updated.');
		return redirect('admin/user-list');
        
		
    }
    
    public function get_branch($state){
        $find_state = DB::Table('state')->where('state_name',$state)->first();
        $branch_list = DB::Table('branches')->where('state_id',$find_state->id)->get();
        
        $option='<option>Select Parishad</option>';

    	foreach ($branch_list as $branch) {
    		$option.='<option value="'.$branch->id.'">'.$branch->name.'</option>';
    	}

    	return $option;
        
    }
}
