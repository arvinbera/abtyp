<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Model\Monthlyreport;
use App\Model\Atdc;
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
use PDF;
use DB;
use Auth;

class MonthllyReportController extends Controller
{
      public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function monthly_report_submit(Request $request)
    {
       



    /*=======================================ATDC Update===========================================================*/

    $update_atdc =  DB::Table('atdc')->where('monthly_report_id',$request->monthly_report_id)->limit(1)
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
            'atdc_prepared_by' =>$request->atdc_prepared_by,
      ));


            /*=======================================MBDD Update===========================================================*/

    $update_mbdd =  DB::Table('mbdd')->where('monthly_report_id',$request->monthly_report_id)->limit(1)
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
            'mbdd_prepared_by' =>$request->mbdd_prepared_by, 
));

          /*=======================================TTF Update===========================================================*/

    $update_ttf =  DB::Table('ttf')->where('monthly_report_id',$request->monthly_report_id)->limit(1)
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
            'ttf_prepared_by' =>$request->ttf_prepared_by,
      ));

        /*=======================================Yuvavahini Update===========================================================*/

    $update_yuvavahini =  DB::Table('yuvavahini')->where('yuva_vahini_monthly_report_id',$request->monthly_report_id)->limit(1)
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


/*=======================================Eye Donation Update===========================================================*/

    $update_eyedonation =  DB::Table('eyedonation')->where('eye_donate_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('eye_donate_no_of_eye_donation' =>$request->eye_donate_no_of_eye_donation,
            'eye_donate_no_ofeye_bank' =>$request->eye_donate_no_ofeye_bank,
            'eye_donate_kry_members' =>$request->eye_donate_kry_members,
            'eye_donate_special_thanks_to' =>$request->eye_donate_special_thanks_to,
            'eye_donate_prepared_by' =>$request->eye_donate_prepared_by,
            'eye_donate_brief_report' =>$request->eye_donate_brief_report,
   
            
             ));

         /*=======================================ampk Update===========================================================*/

    $update_ampk =  DB::Table('ampk')->where('ampk_monthly_report_id',$request->monthly_report_id)->limit(1)
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

        /*=======================================CHOKA SATKAR Update===========================================================*/

    $update_chokasatar =  DB::Table('chokasatar')->where('choka_satkar_monthly_report_id',$request->monthly_report_id)->limit(1)
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

        /*=======================================JAIN SANSKAR VIDHI  Update===========================================================*/

    $update_jsv =  DB::Table('jsv')->where('jsv_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('jsv_date' =>$request->jsv_date,
            'jsv_time' =>$request->jsv_time,
            'jsv_venue' =>$request->jsv_venue,
            'jsv_in_association' =>$request->jsv_in_association,
            'jsv_sanskar_name' =>$request->jsv_sanskar_name,
            'jsv_no_of_participant' =>$request->jsv_no_of_participant,
            'jsv_convenors' =>$request->jsv_convenors,
            'jsv_key_member' =>$request->jsv_key_member,
            'jsv_sponsors' =>$request->jsv_sponsors,
            'jsv_specila_thanks_to' =>$request->jsv_specila_thanks_to,
            'jsv_brief_report' =>$request->jsv_brief_report,
            'jsv_chaitra_aatma' =>$request->jsv_chaitra_aatma,
            'jsv_abtyp_members' =>$request->jsv_abtyp_members,
            'jsv_chief_guest' =>$request->jsv_chief_guest,
            'jsv_guest' =>$request->jsv_guest,
            'jsv_total' =>$request->jsv_total,
            'jsv_prepared_by' =>$request->jsv_prepared_by,


             ));


        /*=======================================SAMAYIK SADHAK  Update===========================================================*/

    $update_samayiksadhak =  DB::Table('samayiksadhak')->where('ss_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('ss_date' =>$request->ss_date,
            'ss_time' =>$request->ss_time,
            'ss_venue' =>$request->ss_venue,
            'ss_in_association' =>$request->ss_in_association,
            'ss_jain_samayik_festival' =>$request->ss_jain_samayik_festival,
            'ss_total_participants' =>$request->ss_total_participants,
            'ss_total_no_of_samayik_sadhak' =>$request->ss_total_no_of_samayik_sadhak,
            'ss_donation_of_samayik_kits' =>$request->ss_donation_of_samayik_kits,
            'ss_conveynor' =>$request->ss_conveynor,
            'ss_key_member' =>$request->ss_key_member,
            'ss_special_thanks_to' =>$request->ss_special_thanks_to,
            'ss_brief_report' =>$request->ss_brief_report,
            'ss_prepared_by' =>$request->ss_prepared_by,

            

             ));

          /*=======================================TAPOYAGYA SADHAK  Update===========================================================*/

    $update_tapoyagya =  DB::Table('tapoyagya')->where('tapoyaga_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('tapoyaga_date' =>$request->tapoyaga_date,
            
            'tapoyaga_time' =>$request->tapoyaga_time,
            'tapoyaga_venue' =>$request->tapoyaga_venue,
            'tapoyaga_in_association' =>$request->tapoyaga_in_association,
            'tapoyaga_conveynor' =>$request->tapoyaga_conveynor,
            'tapoyaga_key_member' =>$request->tapoyaga_key_member,
            'tapoyaga_special_thanks' =>$request->tapoyaga_special_thanks,
            'tapoyaga_brief_report' =>$request->tapoyaga_brief_report,
            'tapoyaga_prepared_by' =>$request->tapoyaga_prepared_by,
            'tapoyagya_no_of_participants' =>$request->tapoyagya_no_of_participants,
            'tapoyagya_Participants_List' =>$request->tapoyagya_Participants_List,


            
            

             ));

 /*=======================================CPS Update===========================================================*/

    $update_cps =  DB::Table('cps')->where('cps_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array(
            'cps_date' => $request->input('cps_date'),
            'cps_time' => $request->input('cps_time'),
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


            
            

             ));

 /*=======================================PD Update===========================================================*/

    $update_pd =  DB::Table('pd')->where('pd_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array(

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
   

            
            

             ));

        /*=======================================Barahvarat Update===========================================================*/

    $update_barahvarat =  DB::Table('barahvarat')->where('bv_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array(
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
            

                      
            
            

             ));

/*=======================================25 bol Update===========================================================*/

    $update_twentyfivebol =  DB::Table('twentyfivebol')->where('tbol_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('tbol_date' =>$request->tbol_date,
            'tbol_time' =>$request->tbol_time,
            'tbol_venue' =>$request->tbol_venue,
            'tbol_in_association' =>$request->tbol_in_association,
            'tbol_conveymor' =>$request->tbol_conveymor,
            'tbol_key_members' =>$request->tbol_key_members,
            'tbol_sponsors' =>$request->tbol_sponsors,
            'tbol_special_thanks' =>$request->tbol_special_thanks,
            'tbol_brief_report' =>$request->tbol_brief_report,
            'tbol_chaitra_aatma' =>$request->tbol_chaitra_aatma,
              'tbol_abtyp_members' =>$request->tbol_abtyp_members,
                'tbol_chief_guest' =>$request->tbol_chief_guest,
                  'tbol_guest' =>$request->tbol_guest,
                    'tbol_total' =>$request->tbol_total,
                      'tbol_preapred_by' =>$request->tbol_preapred_by,
                      
                      
            
            

             ));

        /*=======================================JVK Update===========================================================*/

    $update_jvkl =  DB::Table('jvk')->where('jvk_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array(
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
            
                      
                      
            
            

             ));

        /*=======================================TTK Update===========================================================*/

    $update_ttk =  DB::Table('ttk')->where('tkm_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('tkm_name' =>$request->tkm_name,
            'tkm_time' =>$request->tkm_time,
            'tkm_venue' =>$request->tkm_venue,
            'tkm_in_association' =>$request->tkm_in_association,
            'tkm_no_of_participants' =>$request->tkm_no_of_participants,
            'tkm_convenors' =>$request->tkm_convenors,
            'tkm_key_members' =>$request->tkm_key_members,
            'tkm_sponsors' =>$request->tkm_sponsors,
            'tkm_special_thanks_to' =>$request->tkm_special_thanks_to,
            'tkm_brief_report' =>$request->tkm_brief_report,
              'tkm_chaitra_aatma' =>$request->tkm_chaitra_aatma,
                'tkm_abtyp_members' =>$request->tkm_abtyp_members,
                  'tkm_chief_guest' =>$request->tkm_chief_guest,
                    'tkm_guest' =>$request->tkm_guest,
                      'tkm_total' =>$request->tkm_total,
                      'tkm_prepared_by' =>$request->tkm_prepared_by,
                     
                      
                      
                      
            
            

             ));

         /*=======================================YUVA SANGAM Update===========================================================*/

    $update_yuvasangam =  DB::Table('yuvasangam')->where('ys_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('ys_no_new_members' =>$request->ys_no_new_members,
            'ys_conveynor' =>$request->ys_conveynor,
            'ys_special_thanks_to' =>$request->ys_special_thanks_to,
            'ys_brief_reports' =>$request->ys_brief_reports,
            'ys_prepared_by' =>$request->ys_prepared_by,
            
            

             ));

        /*=======================================FIT YUVA  Update===========================================================*/

    $update_fityuva =  DB::Table('fityuva')->where('fit_yuva_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('fit_yuva_date' =>$request->fit_yuva_date,
            'fit_yuva_time' =>$request->fit_yuva_time,
            'fit_yuva_venue' =>$request->fit_yuva_venue,
            'fit_yuva_in_association' =>$request->fit_yuva_in_association,
            'fit_yuva_event' =>$request->fit_yuva_event,
            'fit_yuva_no_of_participants' =>$request->fit_yuva_no_of_participants,
            'fit_yuva_convenors' =>$request->fit_yuva_convenors,
            'fit_yuva_key_members' =>$request->fit_yuva_key_members,
            'fit_yuva_sponsors' =>$request->fit_yuva_sponsors,
            'fit_yuva_brief_report' =>$request->fit_yuva_brief_report,
              'fit_yuva_chaitrs_aatma' =>$request->fit_yuva_chaitrs_aatma,
                'fit_yuva_abtyp_members' =>$request->fit_yuva_abtyp_members,
                  'fit_yuva_chief_guest' =>$request->fit_yuva_chief_guest,
                    'fit_yuva_guest' =>$request->fit_yuva_guest,
                      'fit_yuva_total' =>$request->fit_yuva_total,
                      'fit_yuva_prepared_by' =>$request->fit_yuva_prepared_by,
                     
                      
                      
                      
            
            

             ));

         /*=======================================Yuvadivas  Update===========================================================*/

    $update_yuvadivas =  DB::Table('yuvadivas')->where('report_id',$request->monthly_report_id)->limit(1)
        ->update(array(
           'yd_date' => $request->input('yd_date'),
            'yd_time' => $request->input('yd_time'),
            'yd_venue' => $request->input('yd_venue'),
            'yd_in_association' => $request->input('yd_in_association'),
            'yd_topic' => $request->input('yd_topic'),
            'yd_no_of_participants' => $request->input('yd_no_of_participants'),
            'yd_convenors' => $request->input('yd_convenors'),
            'yd_key_members' => $request->input('yd_key_members'),
            'yd_sponsors' => $request->input('yd_sponsors'),
            'yd_special_thanks_to' => $request->input('yd_special_thanks_to'),
            'yd_brief_reports' => $request->input('yd_brief_reports'),
            'yd_note' => $request->input('yd_note'),
            'yuvadivas_Chaitra_Aatma' => $request->input('yuvadivas_Chaitra_Aatma'),
            'yuvadivas_ABTYP' => $request->input('yuvadivas_ABTYP'),
            'yuvadivas_Chief_Guest' => $request->input('yuvadivas_Chief_Guest'),
            'yuvadivas_Guests' => $request->input('yuvadivas_Guests'),
            'yuvadivas_Total' => $request->input('yuvadivas_Total'),
            'yuvadivas_Prepared' => $request->input('yuvadivas_Prepared'),
         

          
                  
                      
            
            

             ));

       



    Session::flash('message','Monthly Report Successfully updated');
        return redirect('admin/monthly-report');



}
        

        
        
   
    
    
    public function monthly_report()
    {
         $user=Auth::guard('admin')->user();
        $user_id=$user->id;
        $monthly_report=DB::table('monthlyreports')
                               ->leftJoin('users','users.id','monthlyreports.user_id')
                                 ->leftJoin('atdc','atdc.monthly_report_id','monthlyreports.id')
                               ->leftJoin('mbdd','mbdd.monthly_report_id','monthlyreports.id')
                               ->leftJoin('ttf','ttf.monthly_report_id','monthlyreports.id')
                               ->leftJoin('yuvavahini','yuvavahini.yuva_vahini_monthly_report_id','monthlyreports.id')
                               ->leftJoin('eyedonation','eyedonation.eye_donate_monthly_report_id','monthlyreports.id')
                                 ->leftJoin('chokasatar','chokasatar.choka_satkar_monthly_report_id','monthlyreports.id')
                                ->leftJoin('jsv','jsv.jsv_monthly_report_id','monthlyreports.id')
                               ->leftJoin('samayiksadhak','samayiksadhak.ss_monthly_report_id','monthlyreports.id')
                               ->leftJoin('tapoyagya','tapoyagya.tapoyaga_monthly_report_id','monthlyreports.id')
                                ->leftJoin('cps','cps.cps_monthly_report_id','monthlyreports.id')
                                ->leftJoin('pd','pd.pd_monthly_report_id','monthlyreports.id')
                                ->leftJoin('barahvarat','barahvarat.bv_monthly_report_id','monthlyreports.id')
                                ->leftJoin('jvk','jvk.jvk_monthly_report_id','monthlyreports.id')
                                ->leftJoin('yuvadivas','yuvadivas.report_id','monthlyreports.id')
                                ->leftJoin('ampk','ampk.ampk_monthly_report_id','monthlyreports.id')
                                 ->leftJoin('atjh','atjh.atjh_monthly_report_id','monthlyreports.id')
                                ->select('users.name AS username','monthlyreports.month AS monthly_report_month' ,'monthlyreports.id AS id',
                                 'atdc.total_no_of_billing AS atdc_total_no_of_billing',
                                 'atdc.atdc_status AS atdc_status',
                                 
                                
                                 'mbdd.name_of_camps AS mbdd_name_of_camps',
                                  'mbdd.status AS mbdd_status',
                                 
                               
                                 'ttf.ttf_date AS ttf_ttf_date',
                                  'ttf.status AS ttf_status',
                                 
                               
                                 'yuvavahini.yuva_vahini_date_form AS yuvavahini_yuva_vahini_date_form',
                                  'yuvavahini.status AS yuvavahini_status',
                                 'eyedonation.eye_donate_no_of_eye_donation AS eye_donate_no_of_eye_donation',
                                  'eyedonation.status AS eyedonation_status',

                                   'ampk.ampk_address AS ampk_address',
                                  'ampk.status AS ampk_status',

                                   'atjh.atjh_ADDRESS AS atjh_address',
                                  'atjh.atjh_status AS atjh_status',

                                  'chokasatar.choka_satkar_date_form AS choka_satkar_date_form',
                                  'chokasatar.status AS chokasatar_status'
                                  ,'cps.status AS cps_status','cps.id AS cps_id', 'pd.status AS pd_status','pd.id AS pd_id', 'barahvarat.status As barahvarat_status', 'barahvarat.id AS barahvarat_id', 'jvk.status As jvk_status', 'jvk.id AS jvk_id', 'yuvadivas.status AS yuvadivas_status', 'yuvadivas.id As yuvadivas_id','jsv.id AS jsv_id','jsv.status AS jsv_status','samayiksadhak.id AS samayiksadhak_id','samayiksadhak.status As samayiksadhak_status','tapoyagya.id AS tapoyagya_id', 'tapoyagya.status AS tapoyagya_status',)
                              
                                ->get();
        return view('admin/branch-report',compact('monthly_report','user'));
    }
    
    
    public function monthly_report_filter(Request $request)
    {
        
          $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
         $user=Auth::guard('admin')->user();
        $user_id=$user->id;
        $monthly_report=DB::table('monthlyreports')
                               ->leftJoin('users','users.id','monthlyreports.user_id')
                                 ->leftJoin('atdc','atdc.monthly_report_id','monthlyreports.id')
                               ->leftJoin('mbdd','mbdd.monthly_report_id','monthlyreports.id')
                               ->leftJoin('ttf','ttf.monthly_report_id','monthlyreports.id')
                               ->leftJoin('yuvavahini','yuvavahini.yuva_vahini_monthly_report_id','monthlyreports.id')
                                ->select('users.name AS username','monthlyreports.month AS monthly_report_month' ,'monthlyreports.id AS id',
                                'atdc.total_no_of_billing AS atdc_total_no_of_billing',
                                 'atdc.atdc_status AS atdc_status',
                                 
                                
                                 'mbdd.name_of_camps AS mbdd_name_of_camps',
                                  'mbdd.status AS mbdd_status',
                                 
                               
                                 'ttf.ttf_date AS ttf_ttf_date',
                                  'ttf.status AS ttf_status',
                                 
                               
                                 'yuvavahini.yuva_vahini_date_form AS yuvavahini_yuva_vahini_date_form',
                                  'yuvavahini.status AS yuvavahini_status',)
                                ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                              
                                ->get();
        return view('admin/branch-report',compact('monthly_report','user'));
    }





     public function monthly_report_edit($id)
    {

        $user=DB::table('users')->where('users.id','=',$id)->first();
        $user_id=$user->id;
        $branch=Auth::guard('admin')->user();
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


        $monthly_report=DB::table('monthlyreports')
                            ->leftJoin('users','users.id','monthlyreports.user_id')
                            ->leftJoin('atdc','atdc.monthly_report_id','monthlyreports.id')
                            ->leftJoin('mbdd','mbdd.monthly_report_id','monthlyreports.id')
                            ->leftJoin('ttf','ttf.monthly_report_id','monthlyreports.id')
                             ->leftJoin('yuvavahini','yuvavahini.yuva_vahini_monthly_report_id','monthlyreports.id')
                            ->leftJoin('eyedonation','eyedonation.eye_donate_monthly_report_id','monthlyreports.id')
                            ->leftJoin('ampk','ampk.ampk_monthly_report_id','monthlyreports.id')
                            ->leftJoin('atjh','atjh.atjh_monthly_report_id','monthlyreports.id')
                            ->leftJoin('chokasatar','chokasatar.choka_satkar_monthly_report_id','monthlyreports.id')
                            ->leftJoin('jsv','jsv.jsv_monthly_report_id','monthlyreports.id')
                               ->leftJoin('samayiksadhak','samayiksadhak.ss_monthly_report_id','monthlyreports.id')
                               ->leftJoin('tapoyagya','tapoyagya.tapoyaga_monthly_report_id','monthlyreports.id')
                                ->leftJoin('cps','cps.cps_monthly_report_id','monthlyreports.id')
                                ->leftJoin('pd','pd.pd_monthly_report_id','monthlyreports.id')
                                ->leftJoin('barahvarat','barahvarat.bv_monthly_report_id','monthlyreports.id')
                                ->leftJoin('jvk','jvk.jvk_monthly_report_id','monthlyreports.id')
                                ->leftJoin('yuvadivas','yuvadivas.report_id','monthlyreports.id')












                             ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','atdc.id AS atdc_id','users.name AS username','users.phone_no AS userphoneno','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*', 'mbdd.status AS mbdd_status', 'mbdd.id AS mbdd_id', 'ttf.status AS ttf_status', 'ttf.id AS ttf_id', 'yuvavahini.status As yuvavahini_status', 'yuvavahini.id AS yuvavahini_id', 'eyedonation.status As eyedonation_status', 'eyedonation.id As eyedonation_id', 'ampk.status As ampk_status', 'ampk.id As ampk_id', 'atjh.atjh_status AS atjh_status', 'atjh.id AS atjh_id','chokasatar.status AS chokasatar_status', 'chokasatar.id AS chokasatar_id','jsv.*','samayiksadhak.*','tapoyagya.*','jsv.id AS jsv_id','jsv.status AS jsv_status','samayiksadhak.id AS samayiksadhak_id','samayiksadhak.status As samayiksadhak_status','tapoyagya.id AS tapoyagya_id', 'tapoyagya.status AS tapoyagya_status','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*','cps.status AS cps_status','cps.id AS cps_id', 'pd.status AS pd_status','pd.id AS pd_id', 'barahvarat.status As barahvarat_status', 'barahvarat.id AS barahvarat_id', 'jvk.status As jvk_status', 'jvk.id AS jvk_id', 'yuvadivas.status AS yuvadivas_status', 'yuvadivas.id As yuvadivas_id'














                    )
                            
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('admin/monthly-report-edit',compact('user_list','branch_list','user','monthly_report','branch'));
    }






     public function pdfview(Request $request)
    {
         $items1 = DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
                    ->leftJoin('branches','branches.id','atdc.branch_id')
                    ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','atdc.*')
                    ->where('atdc.id',$request->id)
                    
                   
                  
                    ->first();


       $items2 =DB::table('mbdd')
                    ->leftJoin('users','users.id','mbdd.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                    ->leftJoin('branches','branches.id','mbdd.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','mbdd.*')
                     ->where('mbdd.id',$request->id)
                    
                    ->first();
         $items3 =DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                    ->leftJoin('branches','branches.id','ttf.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttf.*')
                     ->where('ttf.id',$request->id)
                    
                    
                    ->first();
        $items4 =DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvavahini.yuva_vahini_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvavahini.*')
                     ->where('yuvavahini.id',$request->id)
                    
                 
                    
                    ->first();

         $items5 =DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                    ->leftJoin('branches','branches.id','eyedonation.eye_donate_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','eyedonation.*')
                     ->where('eyedonation.id',$request->id)
                    
                    
                 
                    
                    ->first();

         $items6 =DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                    ->leftJoin('branches','branches.id','ampk.ampk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ampk.*')
                     ->where('ampk.id',$request->id)
                    
                    
                 
                    
                    ->first();

         $items7 =DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                    ->leftJoin('branches','branches.id','chokasatar.choka_satkar_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','chokasatar.*')
                     ->where('chokasatar.id',$request->id)
                    
                    
                 
                    
                    ->first();

         $items8 =DB::table('jsv')
                    ->leftJoin('users','users.id','jsv.jsv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')
                    ->leftJoin('branches','branches.id','jsv.jsv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jsv.*')
                     ->where('jsv.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items9 =  DB::table('samayiksadhak')
                    ->leftJoin('users','users.id','samayiksadhak.ss_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')
                    ->leftJoin('branches','branches.id','samayiksadhak.ss_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','samayiksadhak.*')
                     ->where('samayiksadhak.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items10 = DB::table('tapoyagya')
                    ->leftJoin('users','users.id','tapoyagya.tapoyaga_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')
                    ->leftJoin('branches','branches.id','tapoyagya.tapoyaga_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','tapoyagya.*')
                     ->where('tapoyagya.id',$request->id)
                    
                    
                 
                    
                    ->first();
        $items11 = DB::table('cps')
                    ->leftJoin('users','users.id','cps.cps_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')
                    ->leftJoin('branches','branches.id','cps.cps_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','cps.*')
                     ->where('cps.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items12 = DB::table('pd')
                    ->leftJoin('users','users.id','pd.pd_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')
                    ->leftJoin('branches','branches.id','pd.pd_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','pd.*')
                     ->where('pd.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items13 = DB::table('barahvarat')
                    ->leftJoin('users','users.id','barahvarat.bv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')
                    ->leftJoin('branches','branches.id','barahvarat.bv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','barahvarat.*')
                     ->where('barahvarat.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items14 = DB::table('twentyfivebol')
                    ->leftJoin('users','users.id','twentyfivebol.tbol_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','twentyfivebol.tbol_monthly_report_id')
                    ->leftJoin('branches','branches.id','twentyfivebol.tbol_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','twentyfivebol.*')
                     ->where('twentyfivebol.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items15 = DB::table('jvk')
                    ->leftJoin('users','users.id','jvk.jvk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')
                    ->leftJoin('branches','branches.id','jvk.jvk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jvk.*')
                     ->where('jvk.id',$request->id)
                    
                    
                 
                    
                    ->first();
        $items16 = DB::table('yuvadivas')
                    ->leftJoin('users','users.id','yuvadivas.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvadivas.report_id')
                    ->leftJoin('branches','branches.id','yuvadivas.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvadivas.*')
                     ->where('yuvadivas.id',$request->id)
                    
                    
                 
                    
                    ->first();
        $items17 = DB::table('ttk')
                    ->leftJoin('users','users.id','ttk.tkm_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')
                    ->leftJoin('branches','branches.id','ttk.tkm_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttk.*')
                     ->where('ttk.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items18 = DB::table('yuvasangam')
                    ->leftJoin('users','users.id','yuvasangam.ys_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvasangam.ys_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvasangam.*')
                     ->where('yuvasangam.id',$request->id)
                    
                    
                 
                    
                    ->first();
          $items19 = DB::table('fityuva')
                    ->leftJoin('users','users.id','fityuva.fit_yuva_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')
                    ->leftJoin('branches','branches.id','fityuva.fit_yuva_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','fityuva.*')
                     ->where('fityuva.id',$request->id)
                    
                    
                 
                    
                    ->first();



        view()->share('items1',$items1);
        view()->share('items2',$items2);
        view()->share('items3',$items3);
        view()->share('items4',$items4);
        view()->share('items5',$items5);
        view()->share('items6',$items6);
        view()->share('items7',$items7);
        view()->share('items8',$items8);
        view()->share('items9',$items9);
        view()->share('items10',$items10);
        view()->share('items11',$items11);
        view()->share('items13',$items13);
        view()->share('items14',$items14);
        view()->share('items15',$items15);
        view()->share('items16',$items16);
        view()->share('items17',$items17);
        view()->share('items18',$items18);
        view()->share('items19',$items19);
          view()->share('items12',$items12);


















        if($request->has('download')){
            $pdf = PDF::loadView('user/monthly-report-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='monthly_report'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('user/monthly-report-pdf');
    }

    public function monthly_report_print(Request $request)
    {
          $items1 = DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
                    ->leftJoin('branches','branches.id','atdc.branch_id')
                    ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','atdc.*')
                    ->where('atdc.id',$request->id)
                    
                   
                  
                    ->first();


       $items2 =DB::table('mbdd')
                    ->leftJoin('users','users.id','mbdd.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                    ->leftJoin('branches','branches.id','mbdd.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','mbdd.*')
                     ->where('mbdd.id',$request->id)
                    
                    ->first();
         $items3 =DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                    ->leftJoin('branches','branches.id','ttf.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttf.*')
                     ->where('ttf.id',$request->id)
                    
                    
                    ->first();
        $items4 =DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvavahini.yuva_vahini_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvavahini.*')
                     ->where('yuvavahini.id',$request->id)
                    
                 
                    
                    ->first();

         $items5 =DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                    ->leftJoin('branches','branches.id','eyedonation.eye_donate_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','eyedonation.*')
                     ->where('eyedonation.id',$request->id)
                    
                    
                 
                    
                    ->first();

         $items6 =DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                    ->leftJoin('branches','branches.id','ampk.ampk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ampk.*')
                     ->where('ampk.id',$request->id)
                    
                    
                 
                    
                    ->first();

         $items7 =DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                    ->leftJoin('branches','branches.id','chokasatar.choka_satkar_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','chokasatar.*')
                     ->where('chokasatar.id',$request->id)
                    
                    
                 
                    
                    ->first();

         $items8 =DB::table('jsv')
                    ->leftJoin('users','users.id','jsv.jsv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')
                    ->leftJoin('branches','branches.id','jsv.jsv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jsv.*')
                     ->where('jsv.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items9 =  DB::table('samayiksadhak')
                    ->leftJoin('users','users.id','samayiksadhak.ss_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')
                    ->leftJoin('branches','branches.id','samayiksadhak.ss_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','samayiksadhak.*')
                     ->where('samayiksadhak.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items10 = DB::table('tapoyagya')
                    ->leftJoin('users','users.id','tapoyagya.tapoyaga_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')
                    ->leftJoin('branches','branches.id','tapoyagya.tapoyaga_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','tapoyagya.*')
                     ->where('tapoyagya.id',$request->id)
                    
                    
                 
                    
                    ->first();
        $items11 = DB::table('cps')
                    ->leftJoin('users','users.id','cps.cps_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')
                    ->leftJoin('branches','branches.id','cps.cps_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','cps.*')
                     ->where('cps.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items12 = DB::table('pd')
                    ->leftJoin('users','users.id','pd.pd_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')
                    ->leftJoin('branches','branches.id','pd.pd_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','pd.*')
                     ->where('pd.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items13 = DB::table('barahvarat')
                    ->leftJoin('users','users.id','barahvarat.bv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')
                    ->leftJoin('branches','branches.id','barahvarat.bv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','barahvarat.*')
                     ->where('barahvarat.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items14 = DB::table('twentyfivebol')
                    ->leftJoin('users','users.id','twentyfivebol.tbol_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','twentyfivebol.tbol_monthly_report_id')
                    ->leftJoin('branches','branches.id','twentyfivebol.tbol_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','twentyfivebol.*')
                     ->where('twentyfivebol.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items15 = DB::table('jvk')
                    ->leftJoin('users','users.id','jvk.jvk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')
                    ->leftJoin('branches','branches.id','jvk.jvk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jvk.*')
                     ->where('jvk.id',$request->id)
                    
                    
                 
                    
                    ->first();
        $items16 = DB::table('yuvadivas')
                    ->leftJoin('users','users.id','yuvadivas.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvadivas.report_id')
                    ->leftJoin('branches','branches.id','yuvadivas.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvadivas.*')
                     ->where('yuvadivas.id',$request->id)
                    
                    
                 
                    
                    ->first();
        $items17 = DB::table('ttk')
                    ->leftJoin('users','users.id','ttk.tkm_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')
                    ->leftJoin('branches','branches.id','ttk.tkm_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttk.*')
                     ->where('ttk.id',$request->id)
                    
                    
                 
                    
                    ->first();
         $items18 = DB::table('yuvasangam')
                    ->leftJoin('users','users.id','yuvasangam.ys_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvasangam.ys_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvasangam.*')
                     ->where('yuvasangam.id',$request->id)
                    
                    
                 
                    
                    ->first();
          $items19 = DB::table('fityuva')
                    ->leftJoin('users','users.id','fityuva.fit_yuva_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')
                    ->leftJoin('branches','branches.id','fityuva.fit_yuva_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','fityuva.*')
                     ->where('fityuva.id',$request->id)
                    
                    
                 
                    
                    ->first();
                    return view('user/monthly_report_print',compact('items1', 'items2','items3','items4','items5','items6','items7','items8','items9','items10','items11','items12','items13','items14','items15','items16','items17','items18','items19',));
                }

}
