<?php

namespace App\Http\Controllers\Branch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use Session;
use PDF;
class SevaManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:branch');
    }

    public function atdc_list()
    {
        $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
        $atdc_list=DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
             
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','atdc.*')
                    ->where('total_no_of_billing','!=', null)
                   
                   

                  
                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('branch/seva/atdc',compact('atdc_list','users_list'));
    }


    public function mbdd_list()
    {
        $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
         $mbdds_list=DB::table('mbdd')
                    ->leftJoin('users','users.id','mbdd.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                    ->leftJoin('branches','branches.id','mbdd.branch_id')
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','mbdd.*')
                    ->where('name_of_camps','!=', null)
                
                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('branch/seva/mbdd',compact('mbdds_list','users_list'));
    }

    public function ttf_list()
    {
        $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
        $ttf_list=DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                    ->leftJoin('branches','branches.id','ttf.branch_id')
                    ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','ttf.*')
                    ->where('ttf_date','!=', null)
                    
                    
                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('branch/seva/ttf',compact('ttf_list','users_list'));
    }

    public function yuva_vahini_list()
    {
         $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
        
        
         $yuva_vahini_list=DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvavahini.yuva_vahini_branch_id')
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','yuvavahini.*')
                    ->where('yuva_vahini_date_form','!=', null)
               
                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('branch/seva/yuva-vahini',compact('yuva_vahini_list','users_list'));
    }

    public function eye_donation_list()
    {
         $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;

        $eye_donation_list=DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                    ->leftJoin('branches','branches.id','eyedonation.eye_donate_branch_id')
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','eyedonation.*')
                    ->where('eye_donate_no_of_eye_donation','!=', null)
               

                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('branch/seva/eye-donation',compact('eye_donation_list','users_list'));
    }

    public function ampk_list()
    {
          $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;

         $ampk_list=DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                    ->leftJoin('branches','branches.id','ampk.ampk_branch_id')
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','ampk.*')
                    ->where('ampk_address','!=', null)
              

                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('branch/seva/ampk',compact('ampk_list','users_list'));
    }

    public function atjh_list()
    {
    	return view('branch/seva/atjh');
    }


    public function choka_satkar_list()
    {

          $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
        $cs_list=DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                    ->leftJoin('branches','branches.id','chokasatar.choka_satkar_branch_id')
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','chokasatar.*')
                    ->where('choka_satkar_date_form','!=', null)
             

                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('branch/seva/choka-satkar',compact('cs_list','users_list'));
    }



    /*==================================================Filter =========================================================*/
    public function atdc_filter(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $atdc_list=DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
                    ->leftJoin('branches','branches.id','atdc.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','atdc.*')
                    ->where('total_no_of_billing','!=', null)
                    ->where('atdc.user_id','=', $request->user_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                   
                  
                    ->get();
         $users_list=DB::table('users')->get();
          $users_list=DB::table('users')->get();
        
        return view('branch/seva/atdc',compact('atdc_list','users_list','users_list','users_list'));
    }


     public function mbdd_filter(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $mbdds_list=DB::table('mbdd')
                    ->leftJoin('users','users.id','mbdd.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                    ->leftJoin('branches','branches.id','mbdd.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','mbdd.*')
                    ->where('name_of_camps','!=', null)
                    ->where('mbdd.user_id','=', $request->user_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                     $users_list=DB::table('users')->get();
         $users_list=DB::table('users')->get();
                    
        
        return view('branch/seva/mbdd',compact('mbdds_list','users_list','users_list'));
    }

     public function ttf_filter(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $ttf_list=DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                    ->leftJoin('branches','branches.id','ttf.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttf.*')
                    ->where('ttf_date','!=', null)
                    ->where('ttf.user_id','=', $request->user_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                     $users_list=DB::table('users')->get();
         $users_list=DB::table('users')->get();
                    
        return view('branch/seva/ttf',compact('ttf_list','users_list','users_list'));
    }

     public function yuvavahini_filter(Request $request)
    {
       $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $yuva_vahini_list=DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvavahini.yuva_vahini_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvavahini.*')
                    ->where('yuva_vahini_date_form','!=', null)
                    ->where('yuvavahini.yuva_vahini_user_id','=', $request->user_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                     $users_list=DB::table('users')->get();
         $users_list=DB::table('users')->get();
                    
        return view('branch/seva/yuva-vahini',compact('yuva_vahini_list','users_list','users_list'));
    }


     public function eyedonation_filter(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $eye_donation_list=DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                    ->leftJoin('branches','branches.id','eyedonation.eye_donate_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','eyedonation.*')
                    ->where('eye_donate_no_of_eye_donation','!=', null)
                    ->where('eyedonation.eye_donate_user_id','=', $request->user_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                     $users_list=DB::table('users')->get();
         $users_list=DB::table('users')->get();
                    
        return view('branch/seva/eye-donation',compact('eye_donation_list','users_list','users_list'));
    }


     public function ampk_filter(Request $request)
    {
         $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $ampk_list=DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                    ->leftJoin('branches','branches.id','ampk.ampk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ampk.*')
                    ->where('ampk_address','!=', null)
                    ->where('ampk.ampk_user_id','=', $request->user_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                     $users_list=DB::table('users')->get();
         $users_list=DB::table('users')->get();
                    
        return view('branch/seva/ampk',compact('ampk_list','users_list','users_list'));
    }



     public function chokasatar_filter(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $cs_list=DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                    ->leftJoin('branches','branches.id','chokasatar.choka_satkar_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','chokasatar.*')
                    ->where('choka_satkar_date_form','!=', null)
                    ->where('chokasatar.choka_satkar_user_id','=', $request->user_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                     $users_list=DB::table('users')->get();
         $users_list=DB::table('users')->get();
                    
        return view('branch/seva/choka-satkar',compact('cs_list','users_list','users_list'));
    }


    public function atjh_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('branch/seva/atjh-report-filter',compact('parishad_list','users_list'));
    }


   /*=========================================ATDC Edit===========================================*/


public function atdc_edit_page($id)
{
    $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
        $atdc=DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
             
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','atdc.*')
                   
                    ->where('atdc.id','=',$id)
                   
                   

                  
                    ->first();
                     $users_list=DB::table('users')->get();
        return view('branch/seva/atdc-edit',compact('atdc','users_list'));

}
public function atdc_update(Request $request)
{
    $update_atdc =  DB::Table('atdc')->where('id',$request->id)->limit(1)
        ->update(array('total_no_of_billing' =>$request->total_no_of_billing,
            'total_no_of_pathology_patients' =>$request->total_no_of_pathology_patients,
            'no_of_dental_patients' =>$request->no_of_dental_patients,
            'no_of_x_ray_patients' =>$request->no_of_x_ray_patients,
            'no_of_sonography_patients' =>$request->no_of_sonography_patients,
            'no_of_opd_patients' =>$request->no_of_opd_patients,
            'total_no_of_inventory_used' =>$request->total_no_of_inventory_used,
            'special_donation' =>$request->special_donation,
            'special_activity' =>$request->special_activity,
            'chnage_in_machinery' =>$request->chnage_in_machinery,
            'atdc_key_members' =>$request->atdc_key_members,
            'brief_reporting' =>$request->brief_reporting,
            'atdc_prepared_by' =>$request->atdc_prepared_by ));
        if (isset($update_atdc)){

            Session::flash('message','ATDC Successfully Updated.');
            return redirect()->back();

        }else{

            Session::flash('errormessage','Failed!');
            return redirect()->back();
        }

}




/*=========================================Mbdd Edit===========================================*/


public function mbdd_edit_page($id)
{
     $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
         $mbdd=DB::table('mbdd')
                    ->leftJoin('users','users.id','mbdd.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                    
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','mbdd.*')
                     ->where('mbdd.id','=',$id)
                 
                
                    ->first();
                     $users_list=DB::table('users')->get();
        return view('branch/seva/mbdd-edit',compact('mbdd','users_list'));

}
public function mbdd_update(Request $request)
{
    $update_mbdd =  DB::Table('mbdd')->where('id',$request->id)->limit(1)
        ->update(array('name_of_camps' =>$request->name_of_camps,
            'date' =>$request->date,
            'time' =>$request->time,
            'venue' =>$request->venue,
            'name_of_blood_bank' =>$request->name_of_blood_bank,
            'in_association' =>$request->in_association,
            'total_units_collected' =>$request->total_units_collected,
            'camp_convenors' =>$request->camp_convenors,
            'key_members' =>$request->key_members,
            'sponsors' =>$request->sponsors,
            'special_thatnks_to' =>$request->special_thatnks_to,
            'brief_reports' =>$request->brief_reports,
            'chaitra_aatma' =>$request->chaitra_aatma,
            'abtyp_members' =>$request->abtyp_members,
            'chief_guest' =>$request->chief_guest,
            'guests' =>$request->guests,
            'total' =>$request->total,
            'mbdd_prepared_by' =>$request->mbdd_prepared_by, ));
        if (isset($update_mbdd)){

            Session::flash('message','MBDD Successfully Updated.');
            return redirect()->back();

        }else{

            Session::flash('errormessage','Failed!');
            return redirect()->back();
        }

}

/*=========================================TTF Edit===========================================*/


public function ttf_edit_page($id)
{
    $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
        $ttf=DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','ttf.*')
          
                     ->where('ttf.id','=',$id)
                    
                    
                    ->first();
                     $users_list=DB::table('users')->get();
        return view('branch/seva/ttf-edit',compact('ttf','users_list'));

}
public function ttf_update(Request $request)
{
     $update_ttf =  DB::Table('ttf')->where('id',$request->id)->limit(1)
        ->update(array('ttf_date' =>$request->ttf_date,
            'ttf_time' =>$request->ttf_time,
            'ttf_venue' =>$request->ttf_venue,
            'ttf_in_associati' =>$request->ttf_in_associati,
            'ttf_number_Of_participants' =>$request->ttf_number_Of_participants,
            'ttf_ndrf_trainer_ame' =>$request->ttf_ndrf_trainer_ame,
            'ttf_stage' =>$request->ttf_stage,
            'ttf_convenors' =>$request->ttf_convenors,
            'ttf_key_members' =>$request->ttf_key_members,
            'ttf_sponsors' =>$request->ttf_sponsors,
            'ttf_special_thanks_to' =>$request->ttf_special_thanks_to,
            'ttf_brief_reports' =>$request->ttf_brief_reports,
            'ttf_chaitra_aatma' =>$request->ttf_chaitra_aatma,
            'ttf_abtyp_members' =>$request->ttf_abtyp_members,
            'ttf_chief_guest' =>$request->ttf_chief_guest,
            'ttf_guests' =>$request->ttf_guests,
            'ttf_total' =>$request->ttf_total,
            'ttf_prepared_by' =>$request->ttf_prepared_by, ));
        if (isset($update_ttf)){

            Session::flash('message','TTF Successfully Updated.');
            return redirect()->back();

        }else{

            Session::flash('errormessage','Failed!');
            return redirect()->back();
        }

}


/*=========================================yuvavahini Edit===========================================*/


public function yuva_vahini_edit_page($id)
{
     $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
        
        
         $yv=DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
       
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','yuvavahini.*')
                      ->where('yuvavahini.id','=',$id)
                 
               
                    ->first();
                     $users_list=DB::table('users')->get();
        return view('branch/seva/yuva-vahini-edit',compact('yv','users_list'));

}
public function yuva_vahini_update(Request $request)
{
     $update_yuvavahini =  DB::Table('yuvavahini')->where('id',$request->id)->limit(1)
        ->update(array('yuva_vahini_date_form' =>$request->yuva_vahini_date_form,
            'yuva_vahini_date_to' =>$request->yuva_vahini_date_to,
            'yuva_vahini_time' =>$request->yuva_vahini_time,
            'yuva_vahini_no_Of_days' =>$request->yuva_vahini_no_Of_days,
            'yuva_vahini_no_of_members' =>$request->yuva_vahini_no_of_members,
            'yuva_vahini_total_distance' =>$request->yuva_vahini_total_distance,
            'yuva_vahini_no_of_yv_jackets_collected' =>$request->yuva_vahini_no_of_yv_jackets_collected,
            'yuva_vahini_availed_abtyp_accomodation' =>$request->yuva_vahini_availed_abtyp_accomodation,
            'yuva_vahini_availed_satkar' =>$request->yuva_vahini_availed_satkar,
            'yuva_vahini_brief_report' =>$request->yuva_vahini_brief_report,
            'yuva_vahini_prepared_by' =>$request->yuva_vahini_prepared_by,
             ));
        if (isset($update_yuvavahini)){

            Session::flash('message','yuva vahini Successfully Updated.');
            return redirect()->back();

        }else{

            Session::flash('errormessage','Failed!');
            return redirect()->back();
        }

}
/*=========================================eyedonate Edit===========================================*/


public function eyedonate_edit_page($id)
{
      $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;

        $eyedonate=DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                  
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','eyedonation.*')
                              ->where('eyedonation.id','=',$id)
                  
               

                    ->first();
                     $users_list=DB::table('users')->get();
        return view('branch/seva/eyedonate-edit',compact('eyedonate','users_list'));

}
public function eyedonate_update(Request $request)
{
        $update_eyedonation =  DB::Table('eyedonation')->where('id',$request->id)->limit(1)
        ->update(array('eye_donate_no_of_eye_donation' =>$request->eye_donate_no_of_eye_donation,
            'eye_donate_no_ofeye_bank' =>$request->eye_donate_no_ofeye_bank,
            'eye_donate_kry_members' =>$request->eye_donate_kry_members,
            'eye_donate_special_thanks_to' =>$request->eye_donate_special_thanks_to,
            'eye_donate_prepared_by' =>$request->eye_donate_prepared_by,
            'eye_donate_brief_report' =>$request->eye_donate_brief_report,
            
             ));
        if (isset($update_eyedonation)){

            Session::flash('message','Eyedonate Successfully Updated.');
            return redirect()->back();

        }else{

            Session::flash('errormessage','Failed!');
            return redirect()->back();
        }

}


/*=========================================ampk Edit===========================================*/


public function ampk_edit_page($id)
{
     $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;

         $ampk=DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
          
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','ampk.*')
                        ->where('ampk.id','=',$id)
                   

                    ->first();
                     $users_list=DB::table('users')->get();
        return view('branch/seva/ampk-edit',compact('ampk','users_list'));

}
public function ampk_update(Request $request)
{
        $update_ampk =  DB::Table('ampk')->where('id',$request->id)->limit(1)
        ->update(array('ampk_address' =>$request->ampk_address,
            'ampk_in_association' =>$request->ampk_in_association,
            'ampk_chaitra_atma_visited' =>$request->ampk_chaitra_atma_visited,
            'ampk_date' =>$request->ampk_date,
            'ampk_conveynor' =>$request->ampk_conveynor,
            'ampk_key_members' =>$request->ampk_key_members,
            'ampk_sponsors' =>$request->ampk_sponsors,
            'ampk_special_thanks_to' =>$request->ampk_special_thanks_to,
            'ampk_brief_report' =>$request->ampk_brief_report,
            'ampk_prepared_by' =>$request->ampk_prepared_by,
           
             ));
        if (isset($update_ampk)){

            Session::flash('message','AMPK Successfully Updated.');
            return redirect()->back();

        }else{

            Session::flash('errormessage','Failed!');
            return redirect()->back();
        }

}
/*=========================================Chokasotkar Edit===========================================*/


public function chokasatkar_edit_page($id)
{
     $branch =auth::guard('branch')->user();
        $branch_id=$branch->id;
        $cs_list=DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
            
                      ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','chokasatar.*')
                     ->where('chokasatar.id','=',$id)
                 
                    ->first();
                     $users_list=DB::table('users')->first();
        return view('branch/seva/chokasatkar-edit',compact('cs_list','users_list'));

}
public function chokasatkar_update(Request $request)
{
        $update_chokasatar =  DB::Table('chokasatar')->where('id',$request->id)->limit(1)
        ->update(array('choka_satkar_date_form' =>$request->choka_satkar_date_form,
            'choka_satkar_date_to' =>$request->choka_satkar_date_to,
            'choka_satkar_time' =>$request->choka_satkar_time,
            'choka_satkar_no_of_days' =>$request->choka_satkar_no_of_days,
            'choka_satkar_amount_paid' =>$request->choka_satkar_amount_paid,
            'choka_satkar_sponsor' =>$request->choka_satkar_sponsor,
            'choka_satkar_in_association' =>$request->choka_satkar_in_association,
            'choka_satkar_special_thanks_to' =>$request->choka_satkar_special_thanks_to,
            'choka_satkar_brief_reports' =>$request->choka_satkar_brief_reports,
            'choka_satkarprepared_by' =>$request->choka_satkarprepared_by,
             ));
        if (isset($update_chokasatar)){

            Session::flash('message','Cokasatar Successfully Updated.');
            return redirect()->back();

        }else{

            Session::flash('errormessage','Failed!');
            return redirect()->back();
        }

}
  public function pdfview(Request $request)
    {
         $items = DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
                    ->leftJoin('branches','branches.id','atdc.branch_id')
                    ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','atdc.*')
                    ->where('atdc.id',$request->id)
                    
                   
                  
                    ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/seva/atdc-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='atdc'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/seva/atdc-pdf');
    }
    
    
    
    public function mbdd_pdfview(Request $request)
    {
         $items =DB::table('mbdd')
                    ->leftJoin('users','users.id','mbdd.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                    ->leftJoin('branches','branches.id','mbdd.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','mbdd.*')
                     ->where('mbdd.id',$request->id)
                    
                  ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/seva/mbdd-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='mbdd'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/seva/mbdd-pdf');
    }
    
    
    public function ttf_pdfview(Request $request)
    {
         $items =DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                    ->leftJoin('branches','branches.id','ttf.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttf.*')
                     ->where('ttf.id',$request->id)
                    
                    
                  ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/seva/ttf-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='ttf'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/seva/ttf-pdf');
    }


 public function yuvavahini_pdfview(Request $request)
    {
         $items =DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvavahini.yuva_vahini_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvavahini.*')
                     ->where('yuvavahini.id',$request->id)
                    
                 
                    
                  ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/seva/yuvavahini-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='yuvavahini'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/seva/yuvavahini-pdf');
    }
    
    public function eyedonation_pdfview(Request $request)
    {
         $items =DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                    ->leftJoin('branches','branches.id','eyedonation.eye_donate_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','eyedonation.*')
                     ->where('eyedonation.id',$request->id)
                    
                    
                 
                    
                  ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/seva/eyedonation-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='eyedonation'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/seva/eyedonation-pdf');
    }
    
    public function ampk_pdfview(Request $request)
    {
         $items =DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                    ->leftJoin('branches','branches.id','ampk.ampk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ampk.*')
                     ->where('ampk.id',$request->id)
                    
                    
                 
                    
                  ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/seva/ampk-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='ampk'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/seva/ampk-pdf');
    }
    
     public function chokasatar_pdfview(Request $request)
    {
         $items =DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                    ->leftJoin('branches','branches.id','chokasatar.choka_satkar_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','chokasatar.*')
                     ->where('chokasatar.id',$request->id)
                    
                    
                 
                    
                  ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/seva/chokasatar-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='chokasatar'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/seva/chokasatar-pdf');
    }




     /*================================================Print=======================================================*/
public function ampk_print($id)
{
    $items = DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                    ->leftJoin('branches','branches.id','ampk.ampk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ampk.*')
                     ->where('ampk.id',$id)
                     ->first();
                     return view('branch/seva/ampk-pdf',compact('items'));
}

public function atdc_print($id)
{
    $items = DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
                    ->leftJoin('branches','branches.id','atdc.branch_id')
                    ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','atdc.*')
                    ->where('atdc.id',$id)
                     ->first();
                     return view('branch/seva/atdc-pdf',compact('items'));
}

public function cs_list_print($id)
{
    $items = DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                    ->leftJoin('branches','branches.id','chokasatar.choka_satkar_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','chokasatar.*')
                     ->where('chokasatar.id',$id)
                     ->first();
                     return view('branch/seva/chokasatar-pdf',compact('items'));
}

public function eyedonate_print($id)
{
    $items = DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                    ->leftJoin('branches','branches.id','eyedonation.eye_donate_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','eyedonation.*')
                     ->where('eyedonation.id',$id)
                    
                     ->first();
                     return view('branch/seva/eyedonation-pdf',compact('items'));
}

public function ttf_print($id)
{
    $items = DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                    ->leftJoin('branches','branches.id','ttf.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttf.*')
                     ->where('ttf.id',$id)
                    
                     ->first();
                     return view('branch/seva/ttf-pdf',compact('items'));
}

public function yv_print($id)
{
    $items = DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvavahini.yuva_vahini_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvavahini.*')
                     ->where('yuvavahini.id',$id)
                    
                     ->first();
                     return view('branch/seva/yuvavahini-pdf',compact('items'));
}


}
