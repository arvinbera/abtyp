<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Model\Monthlyreport;
use App\Model\Atdc;
use App\Model\Atjh;
use App\Model\Mbdd;
use App\Model\Ttf;
use App\Model\Yuvavahini;
use App\Model\Eyedonation;
use App\Model\Ampk;
use App\Model\Chokasatkar;
use App\Model\Jsv;
use App\Model\Samayiksadhak;
use App\Model\Tapoyagya;
use App\Model\Cps;
use App\Model\Pd;
use App\Model\Barahvarat;
use App\Model\Twentyfivebol;
use App\Model\Jvk;
use App\Model\Ttk;
use App\Model\Yuvasangam;
use App\Model\Fityuva;
use App\Model\Yuvadivas;






use Validator;
use Session;
use DB;
use Auth;
use PDF;



class NewMonthlyReportController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:web');
    }

   public function atdcForm()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-atdc-form',compact('user_list','branch_list','user'));
   }

   public function mbddForm()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-mbdd-form',compact('user_list','branch_list','user'));
   }

   public function ttfForm()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-ttf-form',compact('user_list','branch_list','user'));
   }
   public function yuva_vahini_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-yuva-vahini-form',compact('user_list','branch_list','user'));
   }

   public function eye_donation_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-eye-donation-form',compact('user_list','branch_list','user'));
   }


   public function ampk_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-ampk-form',compact('user_list','branch_list','user'));
   }

   public function choka_satkar_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-choka-satkar-form',compact('user_list','branch_list','user'));
   }

   public function jsv_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-jsv-form',compact('user_list','branch_list','user'));
   }

     public function samayik_sadhak_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-samayik-sadhak-form',compact('user_list','branch_list','user'));
   }
   public function tapoyagya_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-tapoyagya-form',compact('user_list','branch_list','user'));
   }
      public function cps_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-cps-form',compact('user_list','branch_list','user'));
   }
    
   public function pd_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-pd-form',compact('user_list','branch_list','user'));
   }

      public function barah_vrat_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-barah-vrat-form',compact('user_list','branch_list','user'));
   }

         public function jvk_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-jvk-form',compact('user_list','branch_list','user'));
   }

          public function tkm_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-tkm-form',compact('user_list','branch_list','user'));
   }

   public function yuva_sangam_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-yuva-sangam-form',compact('user_list','branch_list','user'));
   }

      public function fit_yuva_Form()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        //dd($user_id);
        $user_list=DB::table('userpermissions')
                    
                    ->where('userpermissions.user_id',$user_id)
                    ->first();
             //dd($user_list);       
        $branch_list=DB::table('branches')
                    ->leftJoin('userbranches','userbranches.branch_id','branches.id')
                    ->where('userbranches.user_id',$user_id)
                    ->select('branches.*')
                    ->get();

        return view('user/new-fit-yuva-form',compact('user_list','branch_list','user'));
   }

   public function atdc_Form_submit(Request $request)
   {

   	  $validator=Validator::make($request->all(),[
		
		'month'=>'required',
		'ecw_meeting_date'=>'required',
		'filled_by'=>'required',
		
		],
		[
		
		'month.required'=>'Please Select Month',
		'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
		'filled_by.required'=>'Required',


		
		]);
		
		if($validator->fails())
		{
			return redirect('user/atdc-form')->withErrors($validator)->withInput();
			
		}

		$user=Auth::guard('web')->user();
        $user_id=$user->id;


        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('atdc', 'atdc.monthly_report_id', '=', 'monthlyreports.id')->where('atdc.user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                        	foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                        	{
                        	$name=$monthly_report_photo->getClientOriginalName();
                        	$monthly_report_photo->move(public_path().'/projectimage',$name);
                        	$monthly_report_photo_data[]=$name;
                        	}
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
		$monthly_report = new Monthlyreport([
			'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
        
        $monthly_report->save();




         /*======================================ATDC ============================================*/
         if($request->hasfile('atdc_images'))
                        {
                        	foreach($request->file('atdc_images') as $atdc_images)
                        	{
                        	$name=$atdc_images->getClientOriginalName();
                        	$atdc_images->move(public_path().'/projectimage',$name);
                        	$atdc_data[]=$name;
                        	}
                        }
                        else{
                            $atdc_data=null;
                        }

    if($request->hasfile('atdc_special_activity_or_camp'))
                        {
                            foreach($request->file('atdc_special_activity_or_camp') as $atdc_special_activity_or_camp)
                            {
                            $name=$atdc_special_activity_or_camp->getClientOriginalName();
                            $atdc_special_activity_or_camp->move(public_path().'/projectimage',$name);
                            $atdc_special_activity_or_camp_data[]=$name;
                            }
                        }
                        else{
                            $atdc_special_activity_or_camp_data=null;
                        }

    if($request->hasfile('chnage_in_machinery'))
                        {
                            foreach($request->file('chnage_in_machinery') as $chnage_in_machinery)
                            {
                            $name=$chnage_in_machinery->getClientOriginalName();
                            $chnage_in_machinery->move(public_path().'/projectimage',$name);
                            $chnage_in_machinery_data[]=$name;
                            }
                        }
                        else{
                            $chnage_in_machinery_data=null;
                        }
        if($request->hasfile('atdc_total_amount_of_collection_at_amms'))
                        {
                            foreach($request->file('atdc_total_amount_of_collection_at_amms') as $atdc_total_amount_of_collection_at_amms)
                            {
                            $name=$atdc_total_amount_of_collection_at_amms->getClientOriginalName();
                            $atdc_total_amount_of_collection_at_amms->move(public_path().'/projectimage',$name);
                            $atdc_total_amount_of_collection_at_amms_data[]=$name;
                            }
                        }
                        else{
                            $atdc_total_amount_of_collection_at_amms_data=null;
                        }
    
         $atdc_submit = new Atdc([

         	'user_id' => $user->id,
         	'monthly_report_id' => $monthly_report->id,

            'total_no_of_billing' => $request->input('total_no_of_billing'),
            'total_no_of_pathology_patients' => $request->input('total_no_of_pathology_patients'),
            'no_of_dental_patients' => $request->input('no_of_dental_patients'),
            'no_of_x_ray_patients' => $request->input('no_of_x_ray_patients'),
            'no_of_sonography_patients' => $request->input('no_of_sonography_patients'),
            'no_of_opd_patients' => $request->input('no_of_opd_patients'),
            'total_no_of_inventory_used' => $request->input('total_no_of_inventory_used'),
            'special_donation' => $request->input('special_donation'),
            'special_activity' => $request->input('special_activity'),
            'chnage_in_machinery' => $request->input('chnage_in_machinery'),
            'atdc_key_members' => $request->input('atdc_key_members'),
            'brief_reporting' => $request->input('brief_reporting'),
            'atdc_prepared_by' => $request->input('atdc_prepared_by'),
            'center_name' => $request->input('center_name'),

            'atdc_status' =>'pending',
            'atdc_images' => json_encode($atdc_data),
            'atdc_special_activity_or_camp' => json_encode($atdc_special_activity_or_camp_data),
            'chnage_in_machinery' => json_encode($chnage_in_machinery_data),
            'atdc_total_amount_of_collection_at_amms' => json_encode($atdc_total_amount_of_collection_at_amms_data),


           
        ]);
      //   dd($atdc_submit);

        $atdc_submit->save();

   

}
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

 public function mbdd_Form_submit(Request $request)
   {

   	  $validator=Validator::make($request->all(),[
		
		'month'=>'required',
		'ecw_meeting_date'=>'required',
		'filled_by'=>'required',
		
		],
		[
		
		'month.required'=>'Please Select Month',
		'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
		'filled_by.required'=>'Required',


		
		]);
		
		if($validator->fails())
		{
			return redirect('user/mbdd-form')->withErrors($validator)->withInput();
			
		}

		$user=Auth::guard('web')->user();
        $user_id=$user->id;


        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('mbdd', 'mbdd.monthly_report_id', '=', 'monthlyreports.id')->where('mbdd.user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
      
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                        	foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                        	{
                        	$name=$monthly_report_photo->getClientOriginalName();
                        	$monthly_report_photo->move(public_path().'/projectimage',$name);
                        	$monthly_report_photo_data[]=$name;
                        	}
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
		$monthly_report = new Monthlyreport([
			'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();




         /*======================================MBDD ============================================*/
         if($request->hasfile('mbdd_images'))
                        {
                            foreach($request->file('mbdd_images') as $mbdd_images)
                            {
                            $name=$mbdd_images->getClientOriginalName();
                            $mbdd_images->move(public_path().'/projectimage',$name);
                            $mbdd_data[]=$name;
                            }
                        }
                         else{
                            $mbdd_data=null;
                        }
        if($request->hasfile('mbdd_total_units_collected'))
                        {
                            foreach($request->file('mbdd_total_units_collected') as $mbdd_total_units_collected)
                            {
                            $name=$mbdd_total_units_collected->getClientOriginalName();
                            $mbdd_total_units_collected->move(public_path().'/projectimage',$name);
                            $mbdd_total_units_collected_data[]=$name;
                            }
                        }
                         else{
                            $mbdd_total_units_collected_data=null;
                        }
         $mbdd_submit = new Mbdd([

            'user_id' => $user->id,
            'monthly_report_id' => $monthly_report->id,
           // 'branch_id' => $request->input('branch_id'),
            'name_of_camps' => $request->input('name_of_camps'),
            'date' => $request->input('date'),
            'time' => $request->input('time'),
            'venue' => $request->input('venue'),
            'name_of_blood_bank' => $request->input('name_of_blood_bank'),
            'in_association' => $request->input('in_association'),
            'total_units_collected' => $request->input('total_units_collected'),
            'camp_convenors' => $request->input('camp_convenors'),
            'key_members' => $request->input('key_members'),
            'sponsors' => $request->input('sponsors'),
            'special_thatnks_to' => $request->input('special_thatnks_to'),
            'brief_reports' => $request->input('brief_reports'),
            'chaitra_aatma' => $request->input('chaitra_aatma'),
            'abtyp_members' => $request->input('abtyp_members'),
            'chief_guest' => $request->input('chief_guest'),
            'guests' => $request->input('guests'),
            'total' => $request->input('total'),
            'mbdd_prepared_by' => $request->input('mbdd_prepared_by'),
            'status' =>'pending',
           
            'mbdd_images' => json_encode($mbdd_data),
            'mbdd_total_units_collected' => json_encode($mbdd_total_units_collected_data),

            

           
        ]);

        $mbdd_submit->save();

   
}

return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function ttf_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/ttf-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


     
           $monthly_report_count=DB::table('monthlyreports') ->leftjoin('ttf', 'ttf.monthly_report_id', '=', 'monthlyreports.id')->where('ttf.user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();




    /*======================================TTF ============================================*/
         if($request->hasfile('ttf_images'))
                        {
                            foreach($request->file('ttf_images') as $ttf_images)
                            {
                            $name=$ttf_images->getClientOriginalName();
                            $ttf_images->move(public_path().'/projectimage',$name);
                            $ttf_data[]=$name;
                            }
                        }
                         else{
                            $ttf_data=null;
                        }
        if($request->hasfile('ttf_number_of_participants'))
                        {
                            foreach($request->file('ttf_number_of_participants') as $ttf_number_of_participants)
                            {
                            $name=$ttf_number_of_participants->getClientOriginalName();
                            $ttf_number_of_participants->move(public_path().'/projectimage',$name);
                            $ttf_number_of_participants_data[]=$name;
                            }
                        }
                         else{
                            $ttf_number_of_participants_data=null;
                        }
         $ttf_submit = new Ttf([

            'user_id' => $user->id,
            'monthly_report_id' => $monthly_report->id,
            'branch_id' => $request->input('branch_id'),
            'ttf_date' => $request->input('ttf_date'),
            'ttf_time' => $request->input('ttf_time'),
            'ttf_venue' => $request->input('ttf_venue'),
            'ttf_in_associati' => $request->input('ttf_in_associati'),
            'ttf_number_Of_participants' => $request->input('ttf_number_Of_participants'),
            'ttf_ndrf_trainer_ame' => $request->input('ttf_ndrf_trainer_ame'),
            'ttf_stage' => $request->input('ttf_stage'),
            'ttf_convenors' => $request->input('ttf_convenors'),
            'ttf_key_members' => $request->input('ttf_key_members'),
            'ttf_sponsors' => $request->input('ttf_sponsors'),
            'ttf_special_thanks_to' => $request->input('ttf_special_thanks_to'),
            'ttf_brief_reports' => $request->input('ttf_brief_reports'),
            'ttf_chaitra_aatma' => $request->input('ttf_chaitra_aatma'),
            'ttf_abtyp_members' => $request->input('ttf_abtyp_members'),
            'ttf_chief_guest' => $request->input('ttf_chief_guest'),
            'ttf_guests' => $request->input('ttf_guests'),
            'ttf_total' => $request->input('ttf_total'),
            'ttf_prepared_by' => $request->input('ttf_prepared_by'),
            'status' =>'pending',
            'ttf_images' => json_encode($ttf_data),
            'ttf_number_of_participants' => json_encode($ttf_number_of_participants_data),
            

           
        ]);

        $ttf_submit->save();

   
}

return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function Yuvavahini_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/yuva-vahini-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


     
        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('yuvavahini', 'yuvavahini.yuva_vahini_monthly_report_id', '=', 'monthlyreports.id')->where('yuvavahini.yuva_vahini_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();




         /*======================================Yuvavahini ============================================*/
        if($request->hasfile('yuvavahini_images'))
                        {
                            foreach($request->file('yuvavahini_images') as $yuvavahini_images)
                            {
                            $name=$yuvavahini_images->getClientOriginalName();
                            $yuvavahini_images->move(public_path().'/projectimage',$name);
                            $yuvavahini_data[]=$name;
                            }
                        }
                         else{
                            $yuvavahini_data=null;
                        }
         $Yuvavahini_submit = new Yuvavahini([

            'yuva_vahini_user_id' => $user->id,
            'yuva_vahini_monthly_report_id' => $monthly_report->id,
            'yuva_vahini_branch_id' => $request->input('branch_id'),
            'yuva_vahini_date_form' => $request->input('yuva_vahini_date_form'),
            'yuva_vahini_date_to' => $request->input('yuva_vahini_date_to'),
            'yuva_vahini_time' => $request->input('yuva_vahini_time'),
            'yuva_vahini_no_Of_days' => $request->input('yuva_vahini_no_Of_days'),
            'yuva_vahini_no_of_members' => $request->input('yuva_vahini_no_of_members'),
            'yuva_vahini_total_distance' => $request->input('yuva_vahini_total_distance'),
            'yuva_vahini_no_of_yv_jackets_collected' => $request->input('yuva_vahini_no_of_yv_jackets_collected'),
            'yuva_vahini_availed_abtyp_accomodation' => $request->input('yuva_vahini_availed_abtyp_accomodation'),
            'yuva_vahini_availed_satkar' => $request->input('yuva_vahini_availed_satkar'),
            'yuva_vahini_brief_report' => $request->input('yuva_vahini_brief_report'),
            'yuva_vahini_prepared_by' => $request->input('yuva_vahini_prepared_by'),
            'status' =>'pending',
            'yuvavahini_images' => json_encode($yuvavahini_data),
            

           
        ]);

        $Yuvavahini_submit->save();
}

return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function eye_donation_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/eye-donation-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


     
        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('eyedonation', 'eyedonation.eye_donate_monthly_report_id', '=', 'monthlyreports.id')->where('eyedonation.eye_donate_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();




       /*======================================Eye Donation ============================================*/
         if($request->hasfile('eye_donation_images'))
                        {
                            foreach($request->file('eye_donation_images') as $eye_donation_images)
                            {
                            $name=$eye_donation_images->getClientOriginalName();
                            $eye_donation_images->move(public_path().'/projectimage',$name);
                            $eye_donation_data[]=$name;
                            }
                        }
                         else{
                            $eye_donation_data=null;
                        }
         $eye_donation_submit = new Eyedonation([

            'eye_donate_user_id' => $user->id,
            'eye_donate_monthly_report_id' => $monthly_report->id,
            'eye_donate_branch_id' => $request->input('branch_id'),
            'eye_donate_no_of_eye_donation' => $request->input('eye_donate_no_of_eye_donation'),
            'eye_donate_no_ofeye_bank' => $request->input('eye_donate_no_ofeye_bank'),
            'eye_donate_kry_members' => $request->input('eye_donate_kry_members'),
            'eye_donate_special_thanks_to' => $request->input('eye_donate_special_thanks_to'),
            'eye_donate_prepared_by' => $request->input('eye_donate_prepared_by'),
            'eye_donate_brief_report' => $request->input('eye_donate_brief_report'),
            'status' =>'pending',
            'eye_donation_images' => json_encode($eye_donation_data),

           
        ]);

   // dd($eye_donation_submit);
        $eye_donation_submit->save();

  }

return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function ampk_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/ampk-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


       $monthly_report_count=DB::table('monthlyreports') ->leftjoin('ampk', 'ampk.ampk_monthly_report_id', '=', 'monthlyreports.id')->where('ampk.ampk_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
      
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();





        /*======================================ampk ============================================*/
         if($request->hasfile('ampk_images'))
                        {
                            foreach($request->file('ampk_images') as $ampk_images)
                            {
                            $name=$ampk_images->getClientOriginalName();
                            $ampk_images->move(public_path().'/projectimage',$name);
                            $ampk_data[]=$name;
                            }
                        }
                         else{
                            $ampk_data=null;
                        }
         $ampk_submit = new Ampk([

            'ampk_user_id' => $user->id,
            'ampk_monthly_report_id' => $monthly_report->id,
            'ampk_branch_id' => $request->input('branch_id'),
            'ampk_address' => $request->input('ampk_address'),
            'ampk_in_association' => $request->input('ampk_in_association'),
            'ampk_chaitra_atma_visited' => $request->input('ampk_chaitra_atma_visited'),
            'ampk_date' => $request->input('ampk_date'),
            'ampk_conveynor' => $request->input('ampk_conveynor'),
            'ampk_key_members' => $request->input('ampk_key_members'),
            'ampk_sponsors' => $request->input('ampk_sponsors'),
            'ampk_special_thanks_to' => $request->input('ampk_special_thanks_to'),
            'ampk_brief_report' => $request->input('ampk_brief_report'),
            'ampk_prepared_by' => $request->input('ampk_prepared_by'),
            'status' =>'pending',
            'ampk_images' => json_encode($ampk_data),

           
        ]);

        $ampk_submit->save();
}

return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function choka_satkar_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/choka-satkar-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


     
        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('chokasatar', 'chokasatar.choka_satkar_monthly_report_id', '=', 'monthlyreports.id')->where('chokasatar.choka_satkar_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();





      /*======================================CHOKA SATKAR ============================================*/
        if($request->hasfile('chokasatar_images'))
                        {
                            foreach($request->file('chokasatar_images') as $chokasatar_images)
                            {
                            $name=$chokasatar_images->getClientOriginalName();
                            $chokasatar_images->move(public_path().'/projectimage',$name);
                            $chokasatar_images_data[]=$name;
                            }
                        }
                         else{
                            $chokasatar_images_data=null;
                        }
              //dd($request->input('choka_satkar_brief_reports'));           
         $chokasatkar_submit = new Chokasatkar([

            'choka_satkar_user_id' => $user->id,
            'choka_satkar_monthly_report_id' => $monthly_report->id,
            'choka_satkar_branch_id' => $request->input('branch_id'),
            'choka_satkar_date_form' => $request->input('choka_satkar_date_form'),
            'choka_satkar_date_to' => $request->input('choka_satkar_date_to'),
            'choka_satkar_time' => $request->input('choka_satkar_time'),
            'choka_satkar_no_of_days' => $request->input('choka_satkar_no_of_days'),
            'choka_satkar_amount_paid' => $request->input('choka_satkar_amount_paid'),
            'choka_satkar_sponsor' => $request->input('choka_satkar_sponsor'),
            'choka_satkar_in_association' => $request->input('choka_satkar_in_association'),
            'choka_satkar_special_thanks_to' => $request->input('choka_satkar_special_thanks_to'),
            'choka_satkar_brief_reports' => $request->input('choka_satkar_brief_reports'),
            'choka_satkarprepared_by' => $request->input('choka_satkarprepared_by'),
            'status' =>'pending',
            'chokasatar_images' => json_encode($chokasatar_images_data),

           
        ]);
        

        $chokasatkar_submit->save();

}

return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function jsv_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/jsv-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


     
          $monthly_report_count=DB::table('monthlyreports') ->leftjoin('jsv', 'jsv.jsv_monthly_report_id', '=', 'monthlyreports.id')->where('jsv.jsv_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();

        



         /*======================================JAIN SANSKAR VIDHI ============================================*/
        if($request->hasfile('jsv_images'))
                        {
                            foreach($request->file('jsv_images') as $jsv_images)
                            {
                            $name=$jsv_images->getClientOriginalName();
                            $jsv_images->move(public_path().'/projectimage',$name);
                            $jsv_images_data[]=$name;
                            }
                        }
                         else{
                            $jsv_images_data=null;
                        }
         $jsv_submit = new Jsv([

            'jsv_user_id' => $user->id,
            'jsv_monthly_report_id' => $monthly_report->id,
            'jsv_branch_id' => $request->input('branch_id'),
            'jsv_date' => $request->input('jsv_date'),
            'jsv_time' => $request->input('jsv_time'),
            'jsv_venue' => $request->input('jsv_venue'),
            'jsv_in_association' => $request->input('jsv_in_association'),
            'jsv_sanskar_name' => $request->input('jsv_sanskar_name'),
            'jsv_no_of_participant' => $request->input('jsv_no_of_participant'),
            'jsv_convenors' => $request->input('jsv_convenors'),
            'jsv_key_member' => $request->input('jsv_key_member'),
            'jsv_sponsors' => $request->input('jsv_sponsors'),
            'jsv_specila_thanks_to' => $request->input('jsv_specila_thanks_to'),
            'jsv_brief_report' => $request->input('jsv_brief_report'),
            'jsv_chaitra_aatma' => $request->input('jsv_chaitra_aatma'),
            'jsv_abtyp_members' => $request->input('jsv_abtyp_members'),
            'jsv_chief_guest' => $request->input('jsv_chief_guest'),
            'jsv_guest' => $request->input('jsv_guest'),
            'jsv_total' => $request->input('jsv_total'),
            'jsv_prepared_by' => $request->input('jsv_prepared_by'),
            'status' =>'pending',
            'jsv_images' => json_encode($jsv_images_data),
           
        ]);
        //  dd($jsv_submit);

        $jsv_submit->save();

}
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function Samayiksadhak_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/samayik-sadhak-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('samayiksadhak', 'samayiksadhak.ss_monthly_report_id', '=', 'monthlyreports.id')->where('samayiksadhak.ss_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
      
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();





            /*======================================SAMAYIK SADHAK============================================*/
        if($request->hasfile('ss_images'))
                        {
                            foreach($request->file('ss_images') as $ss_images)
                            {
                            $name=$ss_images->getClientOriginalName();
                            $ss_images->move(public_path().'/projectimage',$name);
                            $ss_images_data[]=$name;
                            }
                        }
                         else{
                            $ss_images_data=null;
                        }
         $samayiksadhak_submit = new Samayiksadhak([

            'ss_user_id' => $user->id,
            'ss_monthly_report_id' => $monthly_report->id,
            'ss_branch_id' => $request->input('branch_id'),
            'ss_date' => $request->input('ss_date'),
            'ss_time' => $request->input('ss_time'),
            'ss_venue' => $request->input('ss_venue'),
            'ss_chaitra_aatma' => $request->input('ss_chaitra_aatma'),
            'ss_abtyp_members' => $request->input('ss_abtyp_members'),

            'ss_in_association' => $request->input('ss_in_association'),
            'ss_jain_samayik_festival' => $request->input('ss_jain_samayik_festival'),
            'ss_total_participants' => $request->input('ss_total_participants'),
            'ss_total_no_of_samayik_sadhak' => $request->input('ss_total_no_of_samayik_sadhak'),
            'ss_donation_of_samayik_kits' => $request->input('ss_donation_of_samayik_kits'),
            'ss_conveynor' => $request->input('ss_conveynor'),
            'ss_key_member' => $request->input('ss_key_member'),
            'ss_special_thanks_to' => $request->input('ss_special_thanks_to'),
            'ss_brief_report' => $request->input('ss_brief_report'),
            'ss_prepared_by' => $request->input('ss_prepared_by'),
            'status' =>'pending',
            'ss_images' => json_encode($ss_images_data),
            
           
        ]);
     //dd($samayiksadhak_submit);
        $samayiksadhak_submit->save();
}

return Redirect::back()->withMessage('Monthly Report Successfully updated');
}


public function tp_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/tapoyagya-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;

      
     
      $monthly_report_count=DB::table('monthlyreports') ->leftjoin('tapoyagya', 'tapoyagya.tapoyaga_monthly_report_id', '=', 'monthlyreports.id')->where('tapoyagya.tapoyaga_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();





      /*======================================TAPOYAGYA SADHAK============================================*/
        if($request->hasfile('tapoyaga_images'))
                        {
                            foreach($request->file('tapoyaga_images') as $tapoyaga_images)
                            {
                            $name=$tapoyaga_images->getClientOriginalName();
                            $tapoyaga_images->move(public_path().'/projectimage',$name);
                            $tapoyaga_images_data[]=$name;
                            }
                        }
                         else{
                            $tapoyaga_images_data=null;
                        }
         $tapoyagya_submit = new Tapoyagya([

            'tapoyaga_user_id' => $user->id,
            'tapoyaga_monthly_report_id' => $monthly_report->id,
            'tapoyaga_branch_id' => $request->input('branch_id'),
            'tapoyaga_date' => $request->input('tapoyaga_date'),
            'tapoyaga_time' => $request->input('tapoyaga_time'),
            'tapoyaga_venue' => $request->input('tapoyaga_venue'),
            'tapoyaga_in_association' => $request->input('tapoyaga_in_association'),
            'tapoyaga_conveynor' => $request->input('tapoyaga_conveynor'),
            'tapoyaga_key_member' => $request->input('tapoyaga_key_member'),
            
            'tapoyaga_special_thanks' => $request->input('tapoyaga_special_thanks'),
            'tapoyaga_brief_report' => $request->input('tapoyaga_brief_report'),
            'tapoyaga_chaitra_aatma' => $request->input('tapoyaga_chaitra_aatma'),
            'tapoyaga_abtyp_members' => $request->input('tapoyaga_abtyp_members'),

            'tapoyaga_prepared_by' => $request->input('tapoyaga_prepared_by'),
            'tapoyagya_no_of_participants' => $request->input('tapoyagya_no_of_participants'),
            'tapoyagya_Participants_List' => $request->input('tapoyagya_Participants_List'),

            'status' =>'pending',
            'tapoyaga_images' => json_encode($tapoyaga_images_data),
            
            
           
        ]);

        $tapoyagya_submit->save();

}
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}


public function cps_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/cps-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


     
        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('cps', 'cps.cps_monthly_report_id', '=', 'monthlyreports.id')->where('cps.cps_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();





             /*======================================CPS============================================*/
        if($request->hasfile('cps_images'))
                        {
                            foreach($request->file('cps_images') as $cps_images)
                            {
                            $name=$cps_images->getClientOriginalName();
                            $cps_images->move(public_path().'/projectimage',$name);
                            $cps_images_data[]=$name;
                            }
                        }
                         else{
                            $cps_images_data=null;
                        }
        if($request->hasfile('cps_participants_list'))
                        {
                            foreach($request->file('cps_participants_list') as $cps_participants_list)
                            {
                            $name=$cps_participants_list->getClientOriginalName();
                            $cps_participants_list->move(public_path().'/projectimage',$name);
                            $cps_participants_list_data[]=$name;
                            }
                        }
                         else{
                            $cps_participants_list_data=null;
                        }
         $cps_submit = new Cps([

            'cps_user_id' => $user->id,
            'cps_monthly_report_id' => $monthly_report->id,
            'cps_branch_id' => $request->input('branch_id'),
            'cps_date' => $request->input('cps_date'),
            'cps_to' => $request->input('cps_time'),
            'cps_venue' => $request->input('cps_venue'),
            'cps_in_association' => $request->input('cps_in_association'),
            'cps_chaitra_aatma' => $request->input('cps_chaitra_aatma'),
            'cps_abtyp_members' => $request->input('cps_abtyp_members'),
            'cps_chief_guest' => $request->input('cps_chief_guest'),
            'cps_guest' => $request->input('cps_guest'),
            'cps_total_presesnt' => $request->input('cps_total_presesnt'),
            'cps_conveynor' => $request->input('cps_conveynor'),
            'cps_key_member' => $request->input('cps_key_member'),
            'cps_sponcer' => $request->input('cps_sponcer'),
            'cps_special_thanks' => $request->input('cps_special_thanks'),
            'cps_brief_report' => $request->input('cps_brief_report'),
            'cps_prepared_by' => $request->input('cps_prepared_by'),
            'cps_participants_list' => $request->input('cps_participants_list'),

            'cps_Faculty_Name' => $request->input('cps_Faculty_Name'),
            'cps_NUMBER_OF_PARTICIPANTS' => $request->input('cps_NUMBER_OF_PARTICIPANTS'),


            'status' =>'pending',
            'cps_images' => json_encode($cps_images_data),
            'cps_participants_list' => json_encode($cps_participants_list_data),



            
            
           
        ]);

        $cps_submit->save();
}
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}


public function pd_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/pd-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


     $monthly_report_count=DB::table('monthlyreports') ->leftjoin('pd', 'pd.pd_monthly_report_id', '=', 'monthlyreports.id')->where('pd.pd_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
      
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();




         /*======================================PD============================================*/
         if($request->hasfile('pd_images'))
                        {
                            foreach($request->file('pd_images') as $pd_images)
                            {
                            $name=$pd_images->getClientOriginalName();
                            $pd_images->move(public_path().'/projectimage',$name);
                            $pd_images_data[]=$name;
                            }
                        }
                         else{
                            $pd_images_data=null;
                        }

          if($request->hasfile('pd_participants_list'))
                        {
                            foreach($request->file('pd_participants_list') as $pd_p)
                            {
                            $name=$pd_p->getClientOriginalName();
                            $pd_p->move(public_path().'/projectimage',$name);
                            $pd_participants_list_data[]=$name;
                            }
                        }
                         else{
                            $pd_participants_list_data=null;
                        }
         $pd_submit = new Pd([

            'pd_user_id' => $user->id,
            'pd_monthly_report_id' => $monthly_report->id,
            'pd_branch_id' => $request->input('branch_id'),
            'pd_date' => $request->input('pd_date'),
            'pd_time' => $request->input('pd_time'),
            'pd_venue' => $request->input('pd_venue'),
            'pd_in_association' => $request->input('pd_in_association'),
            'pd_teachers_name' => $request->input('pd_teachers_name'),
            'pd_no_of_the_paticipants' => $request->input('pd_no_of_the_paticipants'),
            'pd_convenors' => $request->input('pd_convenors'),
            'pd_kry_member' => $request->input('pd_kry_member'),
            'pd_sponsors' => $request->input('pd_sponsors'),
            'pd_special_thanks_to' => $request->input('pd_special_thanks_to'),
            'pd_brief_report' => $request->input('pd_brief_report'),
            'pd_chaitra_aatma' => $request->input('pd_chaitra_aatma'),
            'pd_abtyp_members' => $request->input('pd_abtyp_members'),
            'pd_chief_guest' => $request->input('pd_chief_guest'),
            'pd_guest' => $request->input('pd_guest'),
            'pd_total' => $request->input('pd_total'),
            'pd_prepared_by' => $request->input('pd_prepared_by'),
            'status' =>'pending',
            'pd_images' => json_encode($pd_images_data),
            'pd_participants_list' => json_encode($pd_participants_list_data),

        
        ]);

        $pd_submit->save();
}
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function Barahvarat_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/barah-vrat-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('barahvarat', 'barahvarat.bv_monthly_report_id', '=', 'monthlyreports.id')->where('barahvarat.bv_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
      
          

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();




          /*======================================Barahvarat============================================*/
         if($request->hasfile('bv_images'))
                        {
                            foreach($request->file('bv_images') as $bv_images)
                            {
                            $name=$bv_images->getClientOriginalName();
                            $bv_images->move(public_path().'/projectimage',$name);
                            $bv_images_data[]=$name;
                            }
                        }
                         else{
                            $bv_images_data=null;
                        }
         $barahvarat_submit = new Barahvarat([

            'bv_user_id' => $user->id,
            'bv_monthly_report_id' => $monthly_report->id,
            'bv_branch_id' => $request->input('branch_id'),
            'bv_date' => $request->input('bv_date'),
            'bv_time' => $request->input('bv_time'),
            'bv_venue' => $request->input('bv_venue'),
            'bv_in_association' => $request->input('bv_in_association'),
            'bv_sanskar_name' => $request->input('bv_sanskar_name'),
            'bv_no_of_participant' => $request->input('bv_no_of_participant'),
            'bv_convenors' => $request->input('bv_convenors'),
            'bv_key_members' => $request->input('bv_key_members'),
            'bv_sponsors' => $request->input('bv_sponsors'),
            'bv_special_thanks_to' => $request->input('bv_special_thanks_to'),
            'bv_brief_report' => $request->input('bv_brief_report'),
            'bv_chaitra_aatma' => $request->input('bv_chaitra_aatma'),
            'bv_abtyp_members' => $request->input('bv_abtyp_members'),
            'bv_chief_guest' => $request->input('bv_chief_guest'),
            'bv_guets' => $request->input('bv_guets'),
            'bv_total' => $request->input('bv_total'),
            'bv_prepared_by' => $request->input('bv_prepared_by'),
            'status' =>'pending',
            'bv_images' => json_encode($bv_images_data),
        
        ]);

        $barahvarat_submit->save();
}
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function jvk_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/jvk-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('jvk', 'jvk.jvk_monthly_report_id', '=', 'monthlyreports.id')->where('jvk.jvk_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
      
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();




          /*======================================JVK============================================*/
        if($request->hasfile('jvk_images'))
                        {
                            foreach($request->file('jvk_images') as $jvk_images)
                            {
                            $name=$jvk_images->getClientOriginalName();
                            $jvk_images->move(public_path().'/projectimage',$name);
                            $jvk_images_data[]=$name;
                            }
                        }
                         else{
                            $jvk_images_data=null;
                        }
         $jvk_submit = new Jvk([

            'jvk_user_id' => $user->id,
            'jvk_monthly_report_id' => $monthly_report->id,
            'jvk_branch_id' => $request->input('branch_id'),
            'jvk_date' => $request->input('jvk_date'),
            'jvk_time' => $request->input('jvk_time'),
            'jvk_venue' => $request->input('jvk_venue'),
            'jvk_in_association' => $request->input('jvk_in_association'),
            'jvk_teachers_name' => $request->input('jvk_teachers_name'),
            'jvk_no_of_participants' => $request->input('jvk_no_of_participants'),
            'jvk_convenors' => $request->input('jvk_convenors'),
            'jvk_key_members' => $request->input('jvk_key_members'),
            'jvk_sponsor' => $request->input('jvk_sponsor'),
            'jvk_special_thanks_to' => $request->input('jvk_special_thanks_to'),
            'jvk_brief_report' => $request->input('jvk_brief_report'),
            'jvk_chaitra_aatma' => $request->input('jvk_chaitra_aatma'),
            'jvk_abtyp_members' => $request->input('jvk_abtyp_members'),
            'jvk_chief_guest' => $request->input('jvk_chief_guest'),
            'jvk_guest' => $request->input('jvk_guest'),
            'jvk_total' => $request->input('jvk_total'),
            'jvk_prepared_by' => $request->input('jvk_prepared_by'),
            'status' =>'pending',
            'jvk_images' => json_encode($jvk_images_data),

            


            
        
        ]);

        $jvk_submit->save();
}
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function tkm_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/tkm-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


       $monthly_report_count=DB::table('monthlyreports') ->leftjoin('ttk', 'ttk.tkm_monthly_report_id', '=', 'monthlyreports.id')->where('ttk.tkm_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
      
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();




          /*======================================TKM============================================*/
        if($request->hasfile('tkm_images'))
                        {
                            foreach($request->file('tkm_images') as $tkm_images)
                            {
                            $name=$tkm_images->getClientOriginalName();
                            $tkm_images->move(public_path().'/projectimage',$name);
                            $tkm_images_data[]=$name;
                            }
                        }
                         else{
                            $tkm_images_data=null;
                        }
         $ttk_submit = new Ttk([

            'tkm_user_id' => $user->id,
            'tkm_monthly_report_id' => $monthly_report->id,
            'tkm_branch_id' => $request->input('branch_id'),
            'tkm_name' => $request->input('tkm_name'),
            'tkm_time' => $request->input('tkm_time'),
            'tkm_venue' => $request->input('tkm_venue'),
            'tkm_in_association' => $request->input('tkm_in_association'),
            'tkm_no_of_participants' => $request->input('tkm_no_of_participants'),
            'tkm_convenors' => $request->input('tkm_convenors'),
            'tkm_key_members' => $request->input('tkm_key_members'),
            'tkm_sponsors' => $request->input('tkm_sponsors'),
            'tkm_special_thanks_to' => $request->input('tkm_special_thanks_to'),
            'tkm_brief_report' => $request->input('tkm_brief_report'),
            'tkm_chaitra_aatma' => $request->input('tkm_chaitra_aatma'),
            'tkm_abtyp_members' => $request->input('tkm_abtyp_members'),
            'tkm_chief_guest' => $request->input('tkm_chief_guest'),
            'tkm_guest' => $request->input('tkm_guest'),
            'tkm_total' => $request->input('tkm_total'),
            'tkm_prepared_by' => $request->input('tkm_prepared_by'),
            'status' =>'pending',
            'tkm_images' => json_encode($tkm_images_data),
            'tkm_event_title' =>$request->input('tkm_event_title'),

            
        
        ]);

        $ttk_submit->save();
  }
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}


public function ys_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/yuva-sangam-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


         $monthly_report_count=DB::table('monthlyreports') ->leftjoin('yuvasangam', 'yuvasangam.ys_monthly_report_id', '=', 'monthlyreports.id')->where('yuvasangam.ys_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
      
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();



   /*======================================YUVA SANGAM ============================================*/
        if($request->hasfile('ys_images'))
                        {
                            foreach($request->file('ys_images') as $ys_images)
                            {
                            $name=$ys_images->getClientOriginalName();
                            $ys_images->move(public_path().'/projectimage',$name);
                            $ys_images_data[]=$name;
                            }
                        }
                         else{
                            $ys_images_data=null;
                        }

        if($request->hasfile('ys_participant_list'))
                        {
                            foreach($request->file('ys_participant_list') as $ys_participant_list)
                            {
                            $name=$ys_participant_list->getClientOriginalName();
                            $ys_participant_list->move(public_path().'/projectimage',$name);
                            $ys_participant_list_data[]=$name;
                            }
                        }
                         else{
                            $ys_participant_list_data=null;
                        }
         $yuvasangam_submit = new Yuvasangam([

            'ys_user_id' => $user->id,
            'ys_monthly_report_id' => $monthly_report->id,
            'ys_branch_id' => $request->input('branch_id'),
            'tkm_ys_no_new_members' => $request->input('tkm_ys_no_new_members'),
            'typ_ys_no_new_members' => $request->input('typ_ys_no_new_members'),
            'ys_conveynor' => $request->input('ys_conveynor'),
            'ys_special_thanks_to' => $request->input('ys_special_thanks_to'),
            'ys_brief_reports' => $request->input('ys_brief_reports'),
            'ys_prepared_by' => $request->input('ys_prepared_by'),
            'new_member_list_updated_on_ys' => $request->input('new_member_list_updated_on_ys'),

            'status' =>'pending',
             'ys_participant_list' => json_encode($ys_participant_list_data),

             'ys_images' => json_encode($ys_images_data),



            
        
        ]);

        $yuvasangam_submit->save();
  }
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}

public function fityuva_Form_submit(Request $request)
 {

      $validator=Validator::make($request->all(),[
        
        'month'=>'required',
        'ecw_meeting_date'=>'required',
        'filled_by'=>'required',
        
        ],
        [
        
        'month.required'=>'Please Select Month',
        'ecw_meeting_date.required'=>'Please Select ECW Meeting Date',
        'filled_by.required'=>'Required',


        
        ]);
        
        if($validator->fails())
        {
            return redirect('user/fit-yuva-form')->withErrors($validator)->withInput();
            
        }

        $user=Auth::guard('web')->user();
        $user_id=$user->id;


        $monthly_report_count=DB::table('monthlyreports') ->leftjoin('fityuva', 'fityuva.fit_yuva_monthly_report_id', '=', 'monthlyreports.id')->where('fityuva.fit_yuva_user_id', $user_id)->where('month',$request->month)->count();
        //dd($monthly_report_count);
        if($monthly_report_count < 1){
      
         

         /*======================================Monthly Report ============================================*/
         if($request->hasfile('monthly_report_photo'))
                        {
                            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
                            {
                            $name=$monthly_report_photo->getClientOriginalName();
                            $monthly_report_photo->move(public_path().'/projectimage',$name);
                            $monthly_report_photo_data[]=$name;
                            }
                        }
                         else{
                            $monthly_report_photo_data = null;
                        }
        $monthly_report = new Monthlyreport([
            'user_id' => $user->id,
         
            'email_id' => $request->input('email_id'),
            'ph_no' => $request->input('ph_no'),
            'month' => $request->input('month'),
            'ecw_meeting_date' => $request->input('ecw_meeting_date'),
            'other_activity' => $request->input('other_activity'),
            'filled_by' => $request->input('filled_by'),
            'filled_by_role' => $request->input('filled_by_role'),
            'monthly_report_photo' => json_encode($monthly_report_photo_data),
         


           
        ]);
       // dd($monthly_report);
        
        $monthly_report->save();



 
         /*======================================FIT YUVA ============================================*/
          if($request->hasfile('fit_yuva_images'))
                        {
                            foreach($request->file('fit_yuva_images') as $fit_yuva_images)
                            {
                            $name=$fit_yuva_images->getClientOriginalName();
                            $fit_yuva_images->move(public_path().'/projectimage',$name);
                            $fit_yuva_images_data[]=$name;
                            }
                        }
                         else{
                            $fit_yuva_images_data=null;
                        }

          if($request->hasfile('fit_yuva_participant_list'))
                        {
                            foreach($request->file('fit_yuva_participant_list') as $fit_yuva_participant_list)
                            {
                            $name=$fit_yuva_participant_list->getClientOriginalName();
                            $fit_yuva_participant_list->move(public_path().'/projectimage',$name);
                            $fit_yuva_participant_list_data=$name;
                            }
                        }
                         else{
                            $fit_yuva_participant_list_data=null;
                        }
         $fityuva_submit = new Fityuva([

            'fit_yuva_user_id' => $user->id,
            'fit_yuva_monthly_report_id' => $monthly_report->id,
            'fit_yuva_branch_id' => $request->input('branch_id'),
            'fit_yuva_date' => $request->input('fit_yuva_date'),
            'fit_yuva_time' => $request->input('fit_yuva_time'),
            'fit_yuva_venue' => $request->input('fit_yuva_venue'),
            'fit_yuva_in_association' => $request->input('fit_yuva_in_association'),
            'fit_yuva_event' => $request->input('fit_yuva_event'),
            'fit_yuva_no_of_participants' => $request->input('fit_yuva_no_of_participants'),
            'fit_yuva_convenors' => $request->input('fit_yuva_convenors'),
            'fit_yuva_key_members' => $request->input('fit_yuva_key_members'),
            'fit_yuva_sponsors' => $request->input('fit_yuva_sponsors'),
            'fit_yuva_brief_report' => $request->input('fit_yuva_brief_report'),
            'fit_yuva_chaitrs_aatma' => $request->input('fit_yuva_chaitrs_aatma'),
            'fit_yuva_abtyp_members' => $request->input('fit_yuva_abtyp_members'),
            'fit_yuva_chief_guest' => $request->input('fit_yuva_chief_guest'),
            'fit_yuva_guest' => $request->input('fit_yuva_guest'),
            'fit_yuva_total' => $request->input('fit_yuva_total'),
            'fit_yuva_prepared_by' => $request->input('fit_yuva_prepared_by'),
            'status' =>'pending',
            'fit_yuva_participant_list' => json_encode($fit_yuva_participant_list_data),
            'fit_yuva_images' => json_encode($fit_yuva_images_data),
            'fit_yuva_special_thanks_to' => $request->input('fit_yuva_special_thanks_to'),




            
        
        ]);

        $fityuva_submit->save();
  }
return Redirect::back()->withMessage('Monthly Report Successfully updated');
}


public function atdcFormView()
   {
         $user=Auth::guard('web')->user();
        $user_id=$user->id;
        $monthly_report=DB::table('atdc')->join('monthlyreports','monthlyreports.id','atdc.monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','atdc.*', ) ->where('monthlyreports.user_id',$user_id)->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
       
      //  dd($monthly_report);
        return view('user/new-atdc-form-view',compact('monthly_report','monthly_report_months'));
   }

   public function mbddFormView()
   {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
       $monthly_report=DB::table('mbdd')->join('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','mbdd.*', ) ->where('monthlyreports.user_id',$user_id)->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
       
         //dd($monthly_report);
        return view('user/new-mbdd-form-view',compact('monthly_report','monthly_report_months'));
   }

   public function ttfFormView()
   {
       $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('ttf')->join('monthlyreports','monthlyreports.id','ttf.monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','ttf.*', ) ->where('monthlyreports.user_id',$user_id)->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();

        return view('user/new-ttf-form-view',compact('monthly_report','monthly_report_months'));
   }
   public function yuva_vahini_FormView()
   {
        $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('yuvavahini')->join('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','yuvavahini.*', ) ->where('monthlyreports.user_id',$user_id)->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();

        return view('user/new-yuva-vahini-form-view',compact('monthly_report','monthly_report_months'));
   }

   public function eye_donation_FormView()
   {
          $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('eyedonation')->join('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','eyedonation.*', ) ->where('monthlyreports.user_id',$user_id)->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();

        return view('user/new-eye-donation-form-view',compact('monthly_report','monthly_report_months'));
   }


   public function ampk_FormView()
   {
         $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('ampk')->join('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','ampk.*', ) ->where('monthlyreports.user_id',$user_id)->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();

        return view('user/new-ampk-form-view',compact('monthly_report','monthly_report_months'));
   }

   public function choka_satkar_FormView()
   {
        $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('chokasatar')->join('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','chokasatar.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();

        return view('user/new-choka-satkar-form-view',compact('monthly_report','monthly_report_months'));
   }

   public function jsv_FormView()
   {
      $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('jsv')->join('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','jsv.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();


        return view('user/new-jsv-form-view',compact('monthly_report','monthly_report_months'));
   }

     public function samayik_sadhak_FormView()
   {
       $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('samayiksadhak')->join('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','samayiksadhak.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();

        return view('user/new-samayik-sadhak-form-view',compact('monthly_report','monthly_report_months'));
   }
   public function tapoyagya_FormView()
   {
        $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('tapoyagya')->join('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','tapoyagya.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();

        return view('user/new-tapoyagya-form-view',compact('monthly_report','monthly_report_months'));
   }
      public function cps_FormView()
   {
        $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('cps')->join('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','cps.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();


        return view('user/new-cps-form-view',compact('monthly_report','monthly_report_months'));
   }
    
   public function pd_FormView()
   {
      $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('pd')->join('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','pd.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        return view('user/new-pd-form-view',compact('monthly_report','monthly_report_months'));
   }

      public function barah_vrat_FormView()
   {
        $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('barahvarat')->join('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','barahvarat.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();

        return view('user/new-barah-vrat-form-view',compact('monthly_report','monthly_report_months'));
   }

 public function jvk_FormView()
   {
         $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('jvk')->join('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','jvk.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();


        return view('user/new-jvk-form-view',compact('monthly_report','monthly_report_months'));
   }

   public function tkm_FormView()
   {
        $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('ttk')->join('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','ttk.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();


        return view('user/new-tkm-form-view',compact('monthly_report','monthly_report_months'));
   }

   public function yuva_sangam_FormView()
   {
        $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('yuvasangam')->join('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','yuvasangam.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();


        return view('user/new-yuva-sangam-form-view',compact('monthly_report','monthly_report_months'));
   }

   public function fit_yuva_FormView()
   {
        $user=Auth::guard('web')->user();
       $user_id=$user->id;
       $monthly_report=DB::table('fityuva')->join('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','fityuva.*', ) ->where('monthlyreports.user_id',$user_id)->get();

        $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();

        return view('user/new-fit-yuva-form-view',compact('monthly_report','monthly_report_months'));
   }
//ATDC REPORT UPDATE

public function atdcDetailReport(Request $request)
{
   $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id;
   $detail_monthly_report=DB::table('atdc')->select('*')->where('id',$id)->first();
   $detail_report=DB::table('atdc')->join('monthlyreports','monthlyreports.id','atdc.monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','atdc.*', 'monthlyreports.user_id') ->where('monthlyreports.user_id',$user_id)->where('atdc.id',$id)->get();
   //dd($detail_report);
   return view('user/abcd',compact('detail_monthly_report','detail_report'));
}
public function editMonthlyReport(Request $request)
{
     $request->id;
     if($request->hasfile('monthly_report_photo'))
     {
         foreach($request->file('monthly_report_photo') as $monthly_report_photo)
         {
         $name=$monthly_report_photo->getClientOriginalName();
         $monthly_report_photo->move(public_path().'/projectimage',$name);
         $monthly_report_photo_data[]=$name;
         }
     }
      else{
         $monthly_report_photo_data = null;
     }

     if($request->hasfile('atdc_images'))
     {
         foreach($request->file('atdc_images') as $atdc_images)
         {
         $name=$atdc_images->getClientOriginalName();
         $atdc_images->move(public_path().'/projectimage',$name);
         $atdc_data[]=$name;
         }
     }
     else{
         $atdc_data=null;
     }

if($request->hasfile('atdc_special_activity_or_camp'))
     {
         foreach($request->file('atdc_special_activity_or_camp') as $atdc_special_activity_or_camp)
         {
         $name=$atdc_special_activity_or_camp->getClientOriginalName();
         $atdc_special_activity_or_camp->move(public_path().'/projectimage',$name);
         $atdc_special_activity_or_camp_data[]=$name;
         }
     }
     else{
         $atdc_special_activity_or_camp_data=null;
     }

if($request->hasfile('chnage_in_machinery'))
     {
         foreach($request->file('chnage_in_machinery') as $chnage_in_machinery)
         {
         $name=$chnage_in_machinery->getClientOriginalName();
         $chnage_in_machinery->move(public_path().'/projectimage',$name);
         $chnage_in_machinery_data[]=$name;
         }
     }
     else{
         $chnage_in_machinery_data=null;
     }
if($request->hasfile('atdc_total_amount_of_collection_at_amms'))
     {
         foreach($request->file('atdc_total_amount_of_collection_at_amms') as $atdc_total_amount_of_collection_at_amms)
         {
         $name=$atdc_total_amount_of_collection_at_amms->getClientOriginalName();
         $atdc_total_amount_of_collection_at_amms->move(public_path().'/projectimage',$name);
         $atdc_total_amount_of_collection_at_amms_data[]=$name;
         }
     }
     else{
         $atdc_total_amount_of_collection_at_amms_data=null;
     }

   $updateReport = DB::Table('atdc')->where('id',$request->id)->update(array('total_no_of_billing'=>$request->total_no_of_billing,'center_name'=>$request->center_name,'total_no_of_pathology_patients'=>$request->total_no_of_pathology_patients,'no_of_dental_patients'=>$request->no_of_dental_patients
,'no_of_x_ray_patients'=>$request->no_of_x_ray_patients,'no_of_sonography_patients'=>$request->no_of_sonography_patients,'no_of_opd_patients'=>$request->no_of_opd_patients,'total_no_of_inventory_used'=>$request->total_no_of_inventory_used
,'special_donation'=>$request->special_donation,'special_activity'=>$request->special_activity,'atdc_key_members'=>$request->atdc_key_members,'atdc_images' => json_encode($atdc_data),
'atdc_special_activity_or_camp' => json_encode($atdc_special_activity_or_camp_data),
'chnage_in_machinery' => json_encode($chnage_in_machinery_data),
'atdc_total_amount_of_collection_at_amms' => json_encode($atdc_total_amount_of_collection_at_amms_data)));
echo $request->monthly_report_id;
  $updateMonthlyReport = DB::Table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->username,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));

    return redirect('user/atdc-form-view');

}
//MBDD REPORT UPDATE
public function mbddDetailReport(Request $request)
{
 $id=$request->id;
 $user=Auth::guard('web')->user();
 $user_id=$user->id;
 $detail_mbdd_report=DB::table('mbdd')->select('*')->where('id',$id)->first();
 $detail_report=DB::table('mbdd')->join('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','mbdd.*', ) ->where('monthlyreports.user_id',$user_id)->where('mbdd.id',$id)->get();
 return view('user/abcd2',compact('detail_mbdd_report','detail_report'));
}

public function mbddEditReport(Request $request)
{
 $request->id;

 if($request->hasfile('monthly_report_photo'))
 {
     foreach($request->file('monthly_report_photo') as $monthly_report_photo)
     {
     $name=$monthly_report_photo->getClientOriginalName();
     $monthly_report_photo->move(public_path().'/projectimage',$name);
     $monthly_report_photo_data[]=$name;
     }
 }
  else{
     $monthly_report_photo_data = null;
 }

 if($request->hasfile('mbdd_images'))
 {
     foreach($request->file('mbdd_images') as $mbdd_images)
     {
     $name=$mbdd_images->getClientOriginalName();
     $mbdd_images->move(public_path().'/projectimage',$name);
     $mbdd_data[]=$name;
     }
 }
  else{
     $mbdd_data=null;
 }
if($request->hasfile('mbdd_total_units_collected'))
 {
     foreach($request->file('mbdd_total_units_collected') as $mbdd_total_units_collected)
     {
     $name=$mbdd_total_units_collected->getClientOriginalName();
     $mbdd_total_units_collected->move(public_path().'/projectimage',$name);
     $mbdd_total_units_collected_data[]=$name;
     }
 }
  else{
     $mbdd_total_units_collected_data=null;
 }

 $updateMbddReport = DB::table('mbdd')->where('id',$request->id)->update(array('venue'=>$request->venue,'name_of_blood_bank'=>$request->name_of_blood_bank,'in_association'=>$request->in_association,
'total_units_collected'=>$request->total_units_collected,'camp_convenors'=>$request->camp_convenors,'key_members'=>$request->key_members,'sponsors'=>$request->sponsors,'special_thatnks_to'=>$request->special_thatnks_to,
'brief_reports'=>$request->brief_reports,'chaitra_aatma'=>$request->chaitra_aatma,'abtyp_members'=>$request->abtyp_members,'chief_guest'=>$request->chief_guest,'guests'=>$request->guests,'mbdd_images' => json_encode($mbdd_data),
'mbdd_total_units_collected' => json_encode($mbdd_total_units_collected_data)));
 echo $request->monthlyreportid;
$updateMonthlyReport = DB::Table('monthlyreports')->where('id',$request->monthlyreportid)->update(array('email_id'=>$request->username,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'email_id'=>$request->email_id,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
return redirect('user/mbdd-form-view');
}
//Edit TTF Monthly Report

 public function ttf_detail_report(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id;
    $detail_ttf_report=DB::table('ttf')->select('*')->where('id',$id)->first();
    $ttf_report=DB::table('ttf')->join('monthlyreports','monthlyreports.id','ttf.monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','ttf.*', ) ->where('monthlyreports.user_id',$user_id)->where('ttf.id',$id)->get();
    return view('user/new-ttf-edit-view',compact('detail_ttf_report','ttf_report'));
 }

    public function ttf_report_update(Request $request)
    {
        if($request->hasfile('monthly_report_photo'))
        {
            foreach($request->file('monthly_report_photo') as $monthly_report_photo)
            {
            $name=$monthly_report_photo->getClientOriginalName();
            $monthly_report_photo->move(public_path().'/projectimage',$name);
            $monthly_report_photo_data[]=$name;
            }
        }
         else{
            $monthly_report_photo_data = null;
        }

        if($request->hasfile('ttf_images'))
                        {
                            foreach($request->file('ttf_images') as $ttf_images)
                            {
                            $name=$ttf_images->getClientOriginalName();
                            $ttf_images->move(public_path().'/projectimage',$name);
                            $ttf_data[]=$name;
                            }
                        }
                         else{
                            $ttf_data=null;
                        }
        if($request->hasfile('ttf_number_of_participants'))
                        {
                            foreach($request->file('ttf_number_of_participants') as $ttf_number_of_participants)
                            {
                            $name=$ttf_number_of_participants->getClientOriginalName();
                            $ttf_number_of_participants->move(public_path().'/projectimage',$name);
                            $ttf_number_of_participants_data[]=$name;
                            }
                        }
                         else{
                            $ttf_number_of_participants_data=null;
                        }
        $updateTtfReport=DB::table('ttf')->where('id',$request->id)->update(array('ttf_venue'=>$request->venue,'ttf_in_associati'=>$request->in_association,
        'ttf_number_Of_participants'=>$request->number_of_participants,'ttf_ndrf_trainer_ame'=>$request->ndrf_trainer_name,'ttf_convenors'=>$request->convenors,
    'ttf_key_members'=>$request->key_members,'ttf_sponsors'=>$request->sponsors,'ttf_special_thanks_to'=>$request->special_thanks_to,'ttf_brief_reports'=>$request->brief_report,
    'ttf_chaitra_aatma'=>$request->chaitra_aatma,'ttf_abtyp_members'=>$request->abtyp_members,'ttf_chief_guest'=>$request->chief_guests,'ttf_guests'=>$request->guests,
    'ttf_images' => json_encode($ttf_data),
    'ttf_number_of_participants' => json_encode($ttf_number_of_participants_data)));

    $updateMonthlyReport = DB::Table('monthlyreports')->where('id',$request->monthlyreportid)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
    return redirect('user/ttf-form-view');

    }

//EDIT YUVA VAHINI Report

  public function yuva_vahini_report(Request $request)
  {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id;
    $detail_yuva_report=DB::table('yuvavahini')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('yuvavahini')->join('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','yuvavahini.*', ) ->where('monthlyreports.user_id',$user_id)->where('yuvavahini.id',$id)->get();
    return view('user/new-yuva-vahini-edit-view',compact('detail_yuva_report','monthly_report'));
  }

  public function yuva_vahini_report_update(Request $request)
  {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }

    if($request->hasfile('yuvavahini_images'))
    {
        foreach($request->file('yuvavahini_images') as $yuvavahini_images)
        {
        $name=$yuvavahini_images->getClientOriginalName();
        $yuvavahini_images->move(public_path().'/projectimage',$name);
        $yuvavahini_data[]=$name;
        }
    }
     else{
        $yuvavahini_data=null;
    }
       $updateYuvaVahiniReport=DB::table('yuvavahini')->where('id',$request->id)->update(array('yuva_vahini_no_Of_days'=>$request->yuva_vahini_no_Of_days,'yuva_vahini_no_of_members'=>$request->yuva_vahini_no_of_members,'yuva_vahini_total_distance'=>$request->yuva_vahini_total_distance,
     'yuva_vahini_no_of_yv_jackets_collected'=>$request->yuva_vahini_no_of_yv_jackets_collected,'yuva_vahini_availed_abtyp_accomodation'=>$request->yuva_vahini_availed_abtyp_accomodation,'yuva_vahini_availed_satkar'=>$request->yuva_vahini_availed_satkar,'yuva_vahini_brief_report'=>$request->yuva_vahini_brief_report,'yuvavahini_images' => json_encode($yuvavahini_data)));
     
     $updateMonthlyReport = DB::Table('monthlyreports')->where('id',$request->monthlyreportid)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
     return redirect('user/yuva-vahini-form-view'); 
        

  }

  //EYE DONATION REPORT

  public function eye_donation_report(Request $request)
  {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id;
    $eye_donation_report=DB::table('eyedonation')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('eyedonation')->join('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','eyedonation.*', ) ->where('monthlyreports.user_id',$user_id)->where('eyedonation.id',$id)->get();
    return view('user/new-eye-donation-edit',compact('eye_donation_report','monthly_report'));
  }

  public function eye_donation_report_update(Request $request)
  {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }
    if($request->hasfile('eye_donation_images'))
    {
        foreach($request->file('eye_donation_images') as $eye_donation_images)
        {
        $name=$eye_donation_images->getClientOriginalName();
        $eye_donation_images->move(public_path().'/projectimage',$name);
        $eye_donation_data[]=$name;
        }
    }
     else{
        $eye_donation_data=null;
    }
    $updateEyeDonationReport=DB::table('eyedonation')->where('id',$request->id)->update(array('eye_donate_no_of_eye_donation'=>$request->eye_donate_no_of_eye_donation,'eye_donate_no_ofeye_bank'=>$request->eye_donate_no_ofeye_bank,
'eye_donate_kry_members'=>$request->eye_donate_kry_members,'eye_donate_special_thanks_to'=>$request->eye_donate_special_thanks_to,'eye_donate_brief_report'=>$request->eye_donate_brief_report,'eye_donation_images' => json_encode($eye_donation_data),));

$updateMonthlyReport = DB::Table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));   
 return redirect('user/eye-donation-form-view');
  }

  //AMPK REPORT

  public function ampk_report(Request $request)
  {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id;
    $ampk_report= DB::table('ampk')->select('*')->where('id',$id)->first(); 
    $monthly_report=DB::table('ampk')->join('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','ampk.*', ) ->where('monthlyreports.user_id',$user_id)->where('ampk.id',$id)->get();
    return view('user/new-ampk-edit-form',compact('ampk_report','monthly_report'));
  }

  public function ampk_report_update(Request $request)
  {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }

    if($request->hasfile('ampk_images'))
    {
        foreach($request->file('ampk_images') as $ampk_images)
        {
        $name=$ampk_images->getClientOriginalName();
        $ampk_images->move(public_path().'/projectimage',$name);
        $ampk_data[]=$name;
        }
    }
     else{
        $ampk_data=null;
    }
      $updateampk = DB::table('ampk')->where('id',$request->id)->update(array('ampk_in_association'=>$request->ampk_in_association,'ampk_chaitra_atma_visited'=>$request->ampk_chaitra_atma_visited,'ampk_date'=>$request->ampk_date,'ampk_conveynor'=>$request->ampk_conveynor,
    'ampk_key_members'=>$request->ampk_key_members,'ampk_sponsors'=>$request->ampk_sponsors,'ampk_special_thanks_to'=>$request->ampk_special_thanks_to,'ampk_brief_report'=>$request->ampk_brief_report,'ampk_images' => json_encode($ampk_data),));
   
    $updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
    return redirect('user/ampk-form-view');
 }

 //CHOKA SATKAR REPORT

 public function choka_satkar_report(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $chokasatkar_report= DB::table('chokasatar')->select('*')->where('id',$id)->first(); 
    $monthly_report=$monthly_report=DB::table('chokasatar')->join('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','chokasatar.*', ) ->where('monthlyreports.user_id',$user_id)->where('chokasatar.id',$id)->get();
    return view('user/new-choka-satkar-edit-form',compact('chokasatkar_report','monthly_report'));
 }

 public function choka_satkar_update(Request $request)
 {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }

    if($request->hasfile('chokasatar_images'))
    {
        foreach($request->file('chokasatar_images') as $chokasatar_images)
        {
        $name=$chokasatar_images->getClientOriginalName();
        $chokasatar_images->move(public_path().'/projectimage',$name);
        $chokasatar_images_data[]=$name;
        }
    }
     else{
        $chokasatar_images_data=null;
    }

     $updatechoka= DB::table('chokasatar')->where('id',$request->id)->update(array('choka_satkar_no_of_days'=>$request->choka_satkar_no_of_days,'choka_satkar_amount_paid'=>$request->choka_satkar_amount_paid,'choka_satkar_sponsor'=>$request->choka_satkar_sponsor
    ,'choka_satkar_special_thanks_to'=>$request->choka_satkar_special_thanks_to,'choka_satkar_brief_reports'=>$request->choka_satkar_brief_reports,'chokasatar_images' => json_encode($chokasatar_images_data),));
    
    $updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
    return redirect('user/choka-satkar-form-view');

 }

 //JSV REPORT

 public function jsv_report(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $jsv_report=DB::table('jsv')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('jsv')->join('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','jsv.*', ) ->where('monthlyreports.user_id',$user_id)->where('jsv.id',$id)->get();
    return view('user/new-jsv-edit-form',compact('jsv_report','monthly_report'));
 }

 public function jsv_report_update(Request $request)
 {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }
    if($request->hasfile('jsv_images'))
    {
        foreach($request->file('jsv_images') as $jsv_images)
        {
        $name=$jsv_images->getClientOriginalName();
        $jsv_images->move(public_path().'/projectimage',$name);
        $jsv_images_data[]=$name;
        }
    }
     else{
        $jsv_images_data=null;
    }

     $updatejsv=DB::table('jsv')->where('id',$request->id)->update(array('jsv_date'=>$request->jsv_date,'jsv_time'=>$request->jsv_time,'jsv_venue'=>$request->jsv_venue,'jsv_sanskar_name'=>$request->jsv_sanskar_name,'jsv_no_of_participant'=>$request->jsv_no_of_participant,'jsv_convenors'=>$request->jsv_convenors,'jsv_key_member'=>$request->jsv_key_member,'jsv_sponsors'=>$request->jsv_sponsors,'jsv_specila_thanks_to'=>$request->jsv_specila_thanks_to,'jsv_brief_report'=>$request->jsv_brief_report,'jsv_chaitra_aatma'=>$request->jsv_chaitra_aatma,
    'jsv_abtyp_members'=>$request->jsv_abtyp_members,'jsv_chief_guest'=>$request->jsv_chief_guest,'jsv_guest'=>$request->jsv_guest,'jsv_images' => json_encode($jsv_images_data),));
    
    $updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
    return redirect('user/jsv-form-view');
 }

 //SAMAYIK SADHAK REPORT

 public function sadhak_report(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $sadhak_report=DB::table('samayiksadhak')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('samayiksadhak')->join('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','samayiksadhak.*', ) ->where('monthlyreports.user_id',$user_id)->where('samayiksadhak.id',$id)->get();
    return view('user/new-samayik-sadhak-edit-form',compact('sadhak_report','monthly_report'));
 }

 public function sadhak_report_update(Request $request)
 {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }

    if($request->hasfile('ss_images'))
    {
        foreach($request->file('ss_images') as $ss_images)
        {
        $name=$ss_images->getClientOriginalName();
        $ss_images->move(public_path().'/projectimage',$name);
        $ss_images_data[]=$name;
        }
    }
     else{
        $ss_images_data=null;
    }
     $updatesadhak = DB::table('samayiksadhak')->where('id',$request->id)->update(array('ss_venue'=>$request->ss_venue,'ss_in_association'=>$request->ss_in_association,'ss_jain_samayik_festival'=>$request->ss_jain_samayik_festival,'ss_total_participants'=>$request->ss_total_participants,
    'ss_total_no_of_samayik_sadhak'=>$request->ss_total_no_of_samayik_sadhak,'ss_donation_of_samayik_kits'=>$request->ss_donation_of_samayik_kits,'ss_conveynor'=>$request->ss_conveynor,'ss_key_member'=>$request->ss_key_member,'ss_special_thanks_to'=>$request->ss_special_thanks_to,
'ss_brief_report'=>$request->ss_brief_report,'ss_chaitra_aatma'=>$request->ss_chaitra_aatma,'ss_abtyp_members'=>$request->ss_abtyp_members,'ss_images' => json_encode($ss_images_data)));

$updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
  return redirect('user/samayik-sadhak-form-view');
 }

 //TAPOYAGYA REPORT

 public function tapoyaga_report(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $tapoyaga_report=DB::table('tapoyagya')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('tapoyagya')->join('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','tapoyagya.*', ) ->where('monthlyreports.user_id',$user_id)->where('tapoyagya.id',$id)->get();
    return view('user/new-tapoyagya-edit-form',compact('tapoyaga_report','monthly_report'));
 }

 public function tapoyaga_report_update(Request $request)
 {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }

    if($request->hasfile('tapoyaga_images'))
    {
        foreach($request->file('tapoyaga_images') as $tapoyaga_images)
        {
        $name=$tapoyaga_images->getClientOriginalName();
        $tapoyaga_images->move(public_path().'/projectimage',$name);
        $tapoyaga_images_data[]=$name;
        }
    }
     else{
        $tapoyaga_images_data=null;
    }

     $updatetapoyaga=DB::table('tapoyagya')->where('id',$request->id)->update(array('tapoyaga_date'=>$request->tapoyaga_date,'tapoyagya_no_of_participants'=>$request->tapoyagya_no_of_participants,'tapoyagya_Participants_List'=>$request->tapoyagya_Participants_List,'tapoyaga_conveynor'=>$request->tapoyaga_conveynor,'tapoyaga_key_member'=>$request->tapoyaga_key_member,
    'tapoyaga_special_thanks'=>$request->tapoyaga_special_thanks,'tapoyaga_brief_report'=>$request->tapoyaga_brief_report,'tapoyaga_chaitra_aatma'=>$request->tapoyaga_chaitra_aatma,'tapoyaga_abtyp_members'=>$request->tapoyaga_abtyp_members,'tapoyaga_images' => json_encode($tapoyaga_images_data)));
    
    $updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
 
    return redirect('user/tapoyagya-form-view');
 
 }

 //CPS REPORT

 public function cps_update(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $cps_report=DB::table('cps')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('cps')->join('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','cps.*', ) ->where('monthlyreports.user_id',$user_id)->where('cps.id',$id)->get();
    return view('user/new-cps-edit-form-view',compact('cps_report','monthly_report'));
 }

 public function cps_update_report(Request $request)
 {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }

    if($request->hasfile('cps_images'))
                        {
                            foreach($request->file('cps_images') as $cps_images)
                            {
                            $name=$cps_images->getClientOriginalName();
                            $cps_images->move(public_path().'/projectimage',$name);
                            $cps_images_data[]=$name;
                            }
                        }
                         else{
                            $cps_images_data=null;
                        }
        if($request->hasfile('cps_participants_list'))
                        {
                            foreach($request->file('cps_participants_list') as $cps_participants_list)
                            {
                            $name=$cps_participants_list->getClientOriginalName();
                            $cps_participants_list->move(public_path().'/projectimage',$name);
                            $cps_participants_list_data[]=$name;
                            }
                        }
                         else{
                            $cps_participants_list_data=null;
                        }
     $updatereport=DB::table('cps')->where('id',$request->id)->update(array('cps_date'=>$request->cps_date,'cps_venue'=>$request->cps_venue,'cps_in_association'=>$request->cps_in_association,'cps_Faculty_Name'=>$request->cps_Faculty_Name,'cps_NUMBER_OF_PARTICIPANTS'=>$request->cps_NUMBER_OF_PARTICIPANTS,'cps_conveynor'=>$request->cps_conveynor,
    'cps_key_member'=>$request->cps_key_member,'cps_sponcer'=>$request->cps_sponcer,'cps_special_thanks'=>$request->cps_special_thanks,'cps_brief_report'=>$request->cps_brief_report,'cps_chaitra_aatma'=>$request->cps_chaitra_aatma,'cps_abtyp_members'=>$request->cps_abtyp_members,'cps_chief_guest'=>$request->cps_chief_guest,'cps_guest'=>$request->cps_guest,'cps_images' => json_encode($cps_images_data),
    'cps_participants_list' => json_encode($cps_participants_list_data)));
    
    $updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
    return redirect('user/cps-form-view');
 }

 //PD REPORT

 public function pd_update(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $pd_report=DB::table('pd')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('pd')->join('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','pd.*', ) ->where('monthlyreports.user_id',$user_id)->where('pd.id',$id)->get();
    return view('user/new-pd-edit-form-view',compact('pd_report','monthly_report'));
 }

 public function pd_update_report(Request $request)
 {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }

    if($request->hasfile('pd_images'))
    {
        foreach($request->file('pd_images') as $pd_images)
        {
        $name=$pd_images->getClientOriginalName();
        $pd_images->move(public_path().'/projectimage',$name);
        $pd_images_data[]=$name;
        }
    }
     else{
        $pd_images_data=null;
    }

if($request->hasfile('pd_participants_list'))
    {
        foreach($request->file('pd_participants_list') as $pd_p)
        {
        $name=$pd_p->getClientOriginalName();
        $pd_p->move(public_path().'/projectimage',$name);
        $pd_participants_list_data[]=$name;
        }
    }
     else{
        $pd_participants_list_data=null;
    }
    $updatereport=DB::table('pd')->where('id',$request->id)->update(array('pd_date'=>$request->pd_date,'pd_time'=>$request->pd_time,'pd_venue'=>$request->pd_venue,'pd_in_association'=>$request->pd_in_association,'pd_teachers_name'=>$request->pd_teachers_name,'pd_no_of_the_paticipants'=>$request->pd_no_of_the_paticipants,'pd_convenors'=>$request->pd_convenors,'pd_kry_member'=>$request->pd_kry_member,'pd_sponsors'=>$request->pd_sponsors,'pd_special_thanks_to'=>$request->pd_special_thanks_to,'pd_brief_report'=>$request->pd_brief_report,
'pd_chaitra_aatma'=>$request->pd_chaitra_aatma,'pd_abtyp_members'=>$request->pd_abtyp_members,'pd_chief_guest'=>$request->pd_chief_guest,'pd_guest'=>$request->pd_guest,'pd_images' => json_encode($pd_images_data),
'pd_participants_list' => json_encode($pd_participants_list_data)));

$updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
    return redirect('user/pd-form-view');
 }

 //BARAH VRAT REPORT

 public function barah_report(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $barah_report=DB::table('barahvarat')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('barahvarat')->join('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','barahvarat.*', ) ->where('monthlyreports.user_id',$user_id)->where('barahvarat.id',$id)->get();  
    return view('user/new-barah-vrat-edit-form',compact('barah_report','monthly_report'));
 }
 
 public function barah_update_report(Request $request)
 {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }
    
    if($request->hasfile('bv_images'))
    {
        foreach($request->file('bv_images') as $bv_images)
        {
        $name=$bv_images->getClientOriginalName();
        $bv_images->move(public_path().'/projectimage',$name);
        $bv_images_data[]=$name;
        }
    }
     else{
        $bv_images_data=null;
    }
     $updatereport=DB::table('barahvarat')->where('id',$request->id)->update(array('bv_venue'=>$request->bv_venue,'bv_in_association'=>$request->bv_in_association,'bv_sanskar_name'=>$request->bv_sanskar_name,'bv_no_of_participant'=>$request->bv_no_of_participant,'bv_convenors'=>$request->bv_convenors,'bv_key_members'=>$request->bv_key_members,'bv_sponsors'=>$request->bv_sponsors,
    'bv_special_thanks_to'=>$request->bv_special_thanks_to,'bv_brief_report'=>$request->bv_brief_report,'bv_abtyp_members'=>$request->bv_abtyp_members,  'bv_images' => json_encode($bv_images_data),'bv_chief_guest'=>$request->bv_chief_guest,'bv_guets'=>$request->bv_guets));
    $updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));
    return redirect('user/barah-vrat-form-view');
 }

 //JVK REPORT

 public function jvk_report(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $jvk_report=DB::table('jvk')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('jvk')->join('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','jvk.*', ) ->where('monthlyreports.user_id',$user_id)->where('jvk.id',$id)->get();
    return view('user/new-jvk-edit-form',compact('jvk_report','monthly_report'));
 }

 public function jvk_update_report(Request $request)
 {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }
    
    if($request->hasfile('jvk_images'))
    {
        foreach($request->file('jvk_images') as $jvk_images)
        {
        $name=$jvk_images->getClientOriginalName();
        $jvk_images->move(public_path().'/projectimage',$name);
        $jvk_images_data[]=$name;
        }
    }
     else{
        $jvk_images_data=null;
    }
   $updatereport=DB::table('jvk')->where('id',$request->id)->update(array('jvk_date'=>$request->jvk_date,'jvk_time'=>$request->jvk_time,'jvk_venue'=>$request->jvk_venue,'jvk_in_association'=>$request->jvk_in_association,'jvk_teachers_name'=>$request->jvk_teachers_name,'jvk_no_of_participants'=>$request->jvk_no_of_participants,'jvk_convenors'=>$request->jvk_convenors,
'jvk_key_members'=>$request->jvk_key_members,'jvk_sponsor'=>$request->jvk_sponsor,'jvk_special_thanks_to'=>$request->jvk_special_thanks_to,'jvk_brief_report'=>$request->jvk_brief_report,'jvk_images' => json_encode($jvk_images_data),'jvk_chaitra_aatma'=>$request->jvk_chaitra_aatma,'jvk_abtyp_members'=>$request->jvk_abtyp_members,'jvk_chief_guest'=>$request->jvk_chief_guest,'jvk_guest'=>$request->jvk_guest));
$updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data))); 
  return redirect('user/jvk-form-view');
 }

 //TKM REPORT

 public function tkm_report(Request $request)
 {
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $tkm_report=DB::table('ttk')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('ttk')->join('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','ttk.*', ) ->where('monthlyreports.user_id',$user_id)->where('ttk.id',$id)->get();
    return view('user/new-tkm-edit-form',compact('tkm_report','monthly_report'));
 }

 public function tkm_update_report(Request $request)
 {
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }
    if($request->hasfile('tkm_images'))
    {
        foreach($request->file('tkm_images') as $tkm_images)
        {
        $name=$tkm_images->getClientOriginalName();
        $tkm_images->move(public_path().'/projectimage',$name);
        $tkm_images_data[]=$name;
        }
    }
     else{
        $tkm_images_data=null;
    }
   $updatereport = DB::table('ttk')->where('id',$request->id)->update(array('tkm_name'=>$request->tkm_name,'tkm_time'=>$request->tkm_time,'tkm_event_title'=>$request->tkm_event_title,'tkm_in_association'=>$request->tkm_in_association,'tkm_no_of_participants'=>$request->tkm_no_of_participants,'tkm_convenors'=>$request->tkm_convenors,'tkm_key_members'=>$request->tkm_key_members,'tkm_sponsors'=>$request->tkm_sponsors,'tkm_special_thanks_to'=>$request->tkm_special_thanks_to,'tkm_brief_report'=>$request->tkm_brief_report,'tkm_chaitra_aatma'=>$request->tkm_chaitra_aatma,
'tkm_abtyp_members'=>$request->tkm_abtyp_members,'tkm_chief_guest'=>$request->tkm_chief_guest,'tkm_images' => json_encode($tkm_images_data),'tkm_guest'=>$request->tkm_guest));
 
$updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));  
  return redirect('user/tkm-form-view'); 
}

//YUVA SANGRAM REPORT

public function yuva_sangram_report(Request $request)
{
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $yuva_sangram_report=DB::table('yuvasangam')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('yuvasangam')->join('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','yuvasangam.*', ) ->where('monthlyreports.user_id',$user_id)->where('yuvasangam.id',$id)->get();
    return view('user/new-yuva-sangram-edit-view',compact('yuva_sangram_report','monthly_report'));
}

public function yuva_sangram_report_update(Request $request)
{
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }
    if($request->hasfile('ys_images'))
                        {
                            foreach($request->file('ys_images') as $ys_images)
                            {
                            $name=$ys_images->getClientOriginalName();
                            $ys_images->move(public_path().'/projectimage',$name);
                            $ys_images_data[]=$name;
                            }
                        }
                         else{
                            $ys_images_data=null;
                        }

        if($request->hasfile('ys_participant_list'))
                        {
                            foreach($request->file('ys_participant_list') as $ys_participant_list)
                            {
                            $name=$ys_participant_list->getClientOriginalName();
                            $ys_participant_list->move(public_path().'/projectimage',$name);
                            $ys_participant_list_data[]=$name;
                            }
                        }
                         else{
                            $ys_participant_list_data=null;
                        }
    $updatereport=DB::table('yuvasangam')->where('id',$request->id)->update(array('typ_ys_no_new_members'=>$request->typ_ys_no_new_members,'tkm_ys_no_new_members'=>$request->tkm_ys_no_new_members,'ys_conveynor'=>$request->ys_conveynor,'ys_special_thanks_to'=>$request->ys_special_thanks_to,'ys_brief_reports'=>$request->ys_brief_reports,'ys_images' => json_encode($ys_images_data),'ys_participant_list' => json_encode($ys_participant_list_data)));
    $updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));  
    return redirect('user/yuva-sangam-form-view');

}

//FIT YUVA REPORT

public function fit_yuva_report(Request $request)
{
    $id=$request->id;
    $user=Auth::guard('web')->user();
    $user_id=$user->id; 
    $fit_yuva_report=DB::table('fityuva')->select('*')->where('id',$id)->first();
    $monthly_report=DB::table('fityuva')->join('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','fityuva.*', ) ->where('monthlyreports.user_id',$user_id)->where('fityuva.id',$id)->get();
    return view('user/new-fit-yuva-edit-form',compact('fit_yuva_report','monthly_report'));
}

public function fit_yuva_report_update(Request $request)
{
    if($request->hasfile('monthly_report_photo'))
    {
        foreach($request->file('monthly_report_photo') as $monthly_report_photo)
        {
        $name=$monthly_report_photo->getClientOriginalName();
        $monthly_report_photo->move(public_path().'/projectimage',$name);
        $monthly_report_photo_data[]=$name;
        }
    }
     else{
        $monthly_report_photo_data = null;
    }
    if($request->hasfile('fit_yuva_images'))
    {
        foreach($request->file('fit_yuva_images') as $fit_yuva_images)
        {
        $name=$fit_yuva_images->getClientOriginalName();
        $fit_yuva_images->move(public_path().'/projectimage',$name);
        $fit_yuva_images_data[]=$name;
        }
    }
     else{
        $fit_yuva_images_data=null;
    }

if($request->hasfile('fit_yuva_participant_list'))
    {
        foreach($request->file('fit_yuva_participant_list') as $fit_yuva_participant_list)
        {
        $name=$fit_yuva_participant_list->getClientOriginalName();
        $fit_yuva_participant_list->move(public_path().'/projectimage',$name);
        $fit_yuva_participant_list_data=$name;
        }
    }
     else{
        $fit_yuva_participant_list_data=null;
    }
    
    
    $updatereport=DB::table('fityuva')->where('id',$request->id)->update(array('fit_yuva_date'=>$request->fit_yuva_date,'fit_yuva_time'=>$request->fit_yuva_time,'fit_yuva_venue'=>$request->fit_yuva_venue,'fit_yuva_in_association'=>$request->fit_yuva_in_association,'fit_yuva_event'=>$request->fit_yuva_event,'fit_yuva_no_of_participants'=>$request->fit_yuva_no_of_participants,'fit_yuva_convenors'=>$request->fit_yuva_convenors,'fit_yuva_key_members'=>$request->fit_yuva_key_members,'fit_yuva_sponsors'=>$request->fit_yuva_sponsors,'fit_yuva_special_thanks_to'=>$request->fit_yuva_special_thanks_to,'fit_yuva_brief_report'=>$request->fit_yuva_brief_report,
'fit_yuva_chaitrs_aatma'=>$request->fit_yuva_chaitrs_aatma,'fit_yuva_images' => json_encode($fit_yuva_images_data),'fit_yuva_participant_list' => json_encode($fit_yuva_participant_list_data),'fit_yuva_abtyp_members'=>$request->fit_yuva_abtyp_members,'fit_yuva_chief_guest'=>$request->fit_yuva_chief_guest,'fit_yuva_guest'=>$request->fit_yuva_guest));
$updateMonthlyReport = DB::table('monthlyreports')->where('id',$request->monthly_report_id)->update(array('email_id'=>$request->email_id,'filled_by'=>$request->filled_by,'filled_by_role'=>$request->filled_by_role,'monthly_report_photo' => json_encode($monthly_report_photo_data)));  
     return redirect('user/fit-yuva-form-view');
}


}