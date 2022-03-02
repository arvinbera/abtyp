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



class MonthlyReportController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function monthly_report_submit(Request $request)
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
			return redirect('/dashboard')->withErrors($validator)->withInput();
			
		}

		$user=Auth::guard('web')->user();
        $user_id=$user->id;


        $monthly_report_count=DB::table('monthlyreports')->where('user_id', $user_id)->where('month',$request->month)->count();
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
            'branch_id' => $request->input('branch_id'),
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
            //test by abhishek mukherjee
            dd($request->input('atdc_prepared_by'));
         $atdc_submit = new Atdc([

         	'user_id' => $user->id,
         	'monthly_report_id' => $monthly_report->id,
            'branch_id' => $request->input('branch_id'),
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

        $atdc_submit->save();


         /*======================================ATJH ============================================*/
         if($request->hasfile('atjh_images'))
                        {
                        	foreach($request->file('atjh_images') as $atjh_images)
                        	{
                        	$name=$atjh_images->getClientOriginalName();
                        	$atjh_images->move(public_path().'/projectimage',$name);
                        	$atjh_data[]=$name;
                        	}
                        }
                        else{
                            $atjh_data=null;
                        }
                        
         $atjh_submit = new Atjh([

            'atjh_user_id' => $user->id,
            'atjh_monthly_report_id' => $monthly_report->id,
            'atjh_branch_id' => $request->input('branch_id'),
            'atjh_ADDRESS' => $request->input('atjh_ADDRESS'),
            'atjh_IN_ASSOCIATION' => $request->input('atjh_IN_ASSOCIATION'),
            'atjh_NUMBER_OF_OCCUPANTS' => $request->input('atjh_NUMBER_OF_OCCUPANTS'),
            'atjh_TOTAL_STRENGHT' => $request->input('atjh_TOTAL_STRENGHT'),
            'atjh_TOTAL_FEE' => $request->input('atjh_TOTAL_FEE'),
            'atjh_DONATION' => $request->input('atjh_DONATION'),
            'atjh_TOTAL_FOOD_EXPENSES' => $request->input('atjh_TOTAL_FOOD_EXPENSES'),
            'atjh_TOTAL_SALARIES' => $request->input('atjh_TOTAL_SALARIES'),
            'atjh_TOTALOF_OTHER_EXPENSES' => $request->input('atjh_TOTALOF_OTHER_EXPENSES'),
            'atjh_CONVENORS' => $request->input('atjh_CONVENORS'),
            'atjh_KEY_MEMBERS' => $request->input('atjh_KEY_MEMBERS'),
            'atjh_SPECIAL_THANKS_TO' => $request->input('atjh_SPECIAL_THANKS_TO'),
            'atjh_BREIF_REPORT' => $request->input('atjh_BREIF_REPORT'),
            'atjh_image' => $request->input('atjh_image'),
            'atjh_PREPARED_BY' => $request->input('atjh_PREPARED_BY'),

            'atjh_status' =>'pending',
            'atjh_images' => json_encode($atjh_data),


           
        ]);

        $atjh_submit->save();


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
            'branch_id' => $request->input('branch_id'),
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

        $eye_donation_submit->save();

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
            'choka_satkar_brief_reports	' => $request->input('choka_satkar_brief_reports	'),
            'choka_satkarprepared_by' => $request->input('choka_satkarprepared_by'),
            'status' =>'pending',
            'chokasatar_images' => json_encode($chokasatar_images_data),

           
        ]);

        $chokasatkar_submit->save();

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

        $jsv_submit->save();

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

        $samayiksadhak_submit->save();

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


            'status' =>'pending',
            'cps_images' => json_encode($cps_images_data),
            'cps_participants_list' => json_encode($cps_participants_list_data),



            
            
           
        ]);

        $cps_submit->save();
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
                            foreach($request->file('pd_participants_list') as $pd_images)
                            {
                            $name=$pd_participants_list->getClientOriginalName();
                            $pd_participants_list->move(public_path().'/projectimage',$name);
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

/*======================================25 bol============================================*/

         $Twentyfivebol_submit = new Twentyfivebol([

         	'tbol_user_id' => $user->id,
         	'tbol_monthly_report_id' => $monthly_report->id,
            'tbol_branch_id' => $request->input('branch_id'),
            'tbol_date' => $request->input('tbol_date'),
            'tbol_time' => $request->input('tbol_time'),
            'tbol_venue' => $request->input('tbol_venue'),
            'tbol_in_association' => $request->input('tbol_in_association'),
            'tbol_conveymor' => $request->input('tbol_conveymor'),
            'tbol_key_members' => $request->input('tbol_key_members'),
            'tbol_sponsors' => $request->input('tbol_sponsors'),
            'tbol_special_thanks' => $request->input('tbol_special_thanks'),
            'tbol_brief_report' => $request->input('tbol_brief_report'),
            'tbol_chaitra_aatma' => $request->input('tbol_chaitra_aatma'),
            'tbol_abtyp_members' => $request->input('tbol_abtyp_members'),
            'tbol_chief_guest' => $request->input('tbol_chief_guest'),
            'tbol_guest' => $request->input('tbol_guest'),
            'tbol_total' => $request->input('tbol_total'),
            'tbol_preapred_by' => $request->input('tbol_preapred_by'),
            'status' =>'pending',
            
        
        ]);

        $Twentyfivebol_submit->save();
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
        /*======================================TTK============================================*/
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

            
        
        ]);

        $ttk_submit->save();
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
            'ys_no_new_members' => $request->input('ys_no_new_members'),
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




            
        
        ]);

        $fityuva_submit->save();
        
        /*======================================Yuvadivas ============================================*/
        if($request->hasfile('yd_images'))
                        {
                        	foreach($request->file('yd_images') as $yd_images)
                        	{
                        	$name=$yd_images->getClientOriginalName();
                        	$yd_images->move(public_path().'/projectimage',$name);
                        	$yd_images_data[]=$name;
                        	}
                        }
                         else{
                            $yd_images_data=null;
                        }
         $yuvadivas_submit = new Yuvadivas([

         	'user_id' => $user->id,
         	'report_id' => $monthly_report->id,
            'branch_id' => $request->input('branch_id'),
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
         

            'status' =>'pending',
            'yd_images' => json_encode($yd_images_data),
           
        
        ]);

        $yuvadivas_submit->save();

        Session::flash('message','Monthly Report Successfully Added.');
        return redirect('/dashboard');
    

    
}

else{



    /*=======================================ATDC Update===========================================================*/
//dd($request->atdc_prepared_by);
    $update_atdc =  DB::Table('atdc')->where('user_id',$user->id)->where('monthly_report_id',$request->monthly_report_id)->limit(1)
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
             /*'atdc_status' =>'pending', */));


            /*=======================================MBDD Update===========================================================*/

    $update_mbdd =  DB::Table('mbdd')->where('user_id',$user->id)->where('monthly_report_id',$request->monthly_report_id)->limit(1)
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
        /*'status' =>'pending',*/));

          /*=======================================TTF Update===========================================================*/

    $update_ttf =  DB::Table('ttf')->where('user_id',$user->id)->where('monthly_report_id',$request->monthly_report_id)->limit(1)
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
        /*    'status' =>'pending',*/ ));

        /*=======================================Yuvavahini Update===========================================================*/

    $update_yuvavahini =  DB::Table('yuvavahini')->where('yuva_vahini_user_id',$user->id)->where('yuva_vahini_monthly_report_id',$request->monthly_report_id)->limit(1)
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
            /*  'status' =>'pending',*/
             ));


/*=======================================Eye Donation Update===========================================================*/

    $update_eyedonation =  DB::Table('eyedonation')->where('eye_donate_user_id',$user->id)->where('eye_donate_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('eye_donate_no_of_eye_donation' =>$request->eye_donate_no_of_eye_donation,
            'eye_donate_no_ofeye_bank' =>$request->eye_donate_no_ofeye_bank,
            'eye_donate_kry_members' =>$request->eye_donate_kry_members,
            'eye_donate_special_thanks_to' =>$request->eye_donate_special_thanks_to,
            'eye_donate_prepared_by' =>$request->eye_donate_prepared_by,
            'eye_donate_brief_report' =>$request->eye_donate_brief_report,
          /*    'status' =>'pending',*/
            
             ));

         /*=======================================ampk Update===========================================================*/

    $update_ampk =  DB::Table('ampk')->where('ampk_user_id',$user->id)->where('ampk_monthly_report_id',$request->monthly_report_id)->limit(1)
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
           /*   'status' =>'pending',*/
           
             ));

        /*=======================================CHOKA SATKAR Update===========================================================*/

    $update_chokasatar =  DB::Table('chokasatar')->where('choka_satkar_user_id',$user->id)->where('choka_satkar_monthly_report_id',$request->monthly_report_id)->limit(1)
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
          /*    'status' =>'pending',*/
             ));

        /*=======================================JAIN SANSKAR VIDHI  Update===========================================================*/

    $update_jsv =  DB::Table('jsv')->where('jsv_user_id',$user->id)->where('jsv_monthly_report_id',$request->monthly_report_id)->limit(1)
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
          /*  'status' =>'pending',*/

             ));


        /*=======================================SAMAYIK SADHAK  Update===========================================================*/

    $update_samayiksadhak =  DB::Table('samayiksadhak')->where('ss_user_id',$user->id)->where('ss_monthly_report_id',$request->monthly_report_id)->limit(1)
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
            /*'status' =>'pending',*/
            

             ));

          /*=======================================TAPOYAGYA SADHAK  Update===========================================================*/

    $update_tapoyagya =  DB::Table('tapoyagya')->where('tapoyaga_user_id',$user->id)->where('tapoyaga_monthly_report_id',$request->monthly_report_id)->limit(1)
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

           /* 'status' =>'pending',*/
            
            

             ));

 /*=======================================CPS Update===========================================================*/

    $update_cps =  DB::Table('cps')->where('cps_user_id',$user->id)->where('cps_monthly_report_id',$request->monthly_report_id)->limit(1)
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


         /*   'status' =>'pending',*/
            
            

             ));

 /*=======================================PD Update===========================================================*/

    $update_pd =  DB::Table('pd')->where('pd_user_id',$user->id)->where('pd_monthly_report_id',$request->monthly_report_id)->limit(1)
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
        /*    'status' =>'pending',*/

            
            

             ));

        /*=======================================Barahvarat Update===========================================================*/

    $update_barahvarat =  DB::Table('barahvarat')->where('bv_user_id',$user->id)->where('bv_monthly_report_id',$request->monthly_report_id)->limit(1)
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
            /*'status' =>'pending',*/

                      
            
            

             ));

/*=======================================25 bol Update===========================================================*/

    $update_twentyfivebol =  DB::Table('twentyfivebol')->where('tbol_user_id',$user->id)->where('tbol_monthly_report_id',$request->monthly_report_id)->limit(1)
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

    $update_jvkl =  DB::Table('jvk')->where('jvk_user_id',$user->id)->where('jvk_monthly_report_id',$request->monthly_report_id)->limit(1)
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
            /*'status' =>'pending',*/

                      
                      
            
            

             ));

        /*=======================================TTK Update===========================================================*/

    $update_ttk =  DB::Table('ttk')->where('tkm_user_id',$user->id)->where('tkm_monthly_report_id',$request->monthly_report_id)->limit(1)
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

    $update_yuvasangam =  DB::Table('yuvasangam')->where('ys_user_id',$user->id)->where('ys_monthly_report_id',$request->monthly_report_id)->limit(1)
        ->update(array('ys_no_new_members' =>$request->ys_no_new_members,
            'ys_conveynor' =>$request->ys_conveynor,
            'ys_special_thanks_to' =>$request->ys_special_thanks_to,
            'ys_brief_reports' =>$request->ys_brief_reports,
            'ys_prepared_by' =>$request->ys_prepared_by,
            
            

             ));

        /*=======================================FIT YUVA  Update===========================================================*/

    $update_fityuva =  DB::Table('fityuva')->where('fit_yuva_user_id',$user->id)->where('fit_yuva_monthly_report_id',$request->monthly_report_id)->limit(1)
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

    $update_yuvadivas =  DB::Table('yuvadivas')->where('user_id',$user->id)->where('report_id',$request->monthly_report_id)->limit(1)
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
         

           /* 'status' =>'pending',*/
                  
                      
            
            

             ));














return Redirect::back()->withMessage('Monthly Report Successfully updated');
       



}
		

		
		
   
    
    }




    public function monthly_report(Request $request)
    {
         $user=Auth::guard('web')->user();
        $user_id=$user->id;
        $monthly_report=DB::table('monthlyreports')
                               ->leftJoin('users','users.id','monthlyreports.user_id')
                               ->leftJoin('atdc','atdc.monthly_report_id','monthlyreports.id')
                               ->leftJoin('mbdd','mbdd.monthly_report_id','monthlyreports.id')
                               ->leftJoin('ttf','ttf.monthly_report_id','monthlyreports.id')
                               ->leftJoin('yuvavahini','yuvavahini.yuva_vahini_monthly_report_id','monthlyreports.id')
                               ->leftJoin('eyedonation','eyedonation.eye_donate_monthly_report_id','monthlyreports.id')
                               ->leftJoin('ampk','ampk.ampk_monthly_report_id','monthlyreports.id')
                                ->leftJoin('chokasatar','chokasatar.choka_satkar_monthly_report_id','monthlyreports.id')
                               
                               
                               
                               
                               
                                ->select('users.name AS username','monthlyreports.month AS monthly_report_month' ,
                                'monthlyreports.id AS id',
                              
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
                                  
                                   'chokasatar.choka_satkar_date_form AS choka_satkar_date_form',
                                  'chokasatar.status AS chokasatar_status'
                                
                                
                                
                                
                                
                                
                                
                                )
                                ->where('monthlyreports.user_id',$user_id)
                                ->get();
            $monthly_report_months=DB::table('monthlyreports')  ->where('monthlyreports.user_id',$user_id)->get();
       
        return view('user/user-report',compact('monthly_report','monthly_report_months'));
    }
    
    public function monthly_report_filter(Request $request)
    {
          $start_month= $request->startmonth;
       //   return $start_month;
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
         $user=Auth::guard('web')->user();
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
                                ->where('monthlyreports.user_id',$user_id)
                                ->where('monthlyreports.month',$start_month)
                                 
                                ->get();
        $get_monthly_report=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->where('monthlyreports.month', $start_month)->select('monthlyreports.id')->first();
     $get_monthly_report_id=$get_monthly_report->id;
        //dd($get_monthly_report_id);
                                
        $atdc_ststus=DB::table('atdc')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
                   
                    ->select('atdc.*')
                    ->where('atdc.user_id',$user_id)
                    ->where('atdc.monthly_report_id',$get_monthly_report_id)
                    ->first();
                    
        $mbdd_ststus=DB::table('mbdd')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                   
                    ->select('mbdd.*')
                    ->where('mbdd.user_id',$user_id)
                    ->where('mbdd.monthly_report_id',$get_monthly_report_id)
                    ->first();
        $ttf_ststus=DB::table('ttf')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                   
                    ->select('ttf.*')
                    ->where('ttf.user_id',$user_id)
                    ->where('ttf.monthly_report_id',$get_monthly_report_id)
                    ->first();
        $yuvavahini_ststus=DB::table('yuvavahini')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                   
                    ->select('yuvavahini.*')
                    ->where('yuvavahini.yuva_vahini_user_id',$user_id)
                    ->where('yuvavahini.yuva_vahini_monthly_report_id',$get_monthly_report_id)
                    ->first();
         $eyedonation_ststus=DB::table('eyedonation')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                   
                    ->select('eyedonation.*')
                    ->where('eyedonation.eye_donate_user_id',$user_id)
                    ->where('eyedonation.eye_donate_monthly_report_id',$get_monthly_report_id)
                    ->first();
        $ampk_ststus=DB::table('ampk')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                   
                    ->select('ampk.*')
                    ->where('ampk.ampk_user_id',$user_id)
                    ->where('ampk.ampk_monthly_report_id',$get_monthly_report_id)
                    ->first();
         $chokasatar_ststus=DB::table('chokasatar')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                   
                    ->select('chokasatar.*')
                    ->where('chokasatar.choka_satkar_user_id',$user_id)
                    ->where('chokasatar.choka_satkar_monthly_report_id',$get_monthly_report_id)
                    ->first();
           $atjh_ststus=DB::table('atjh')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','atjh.atjh_monthly_report_id')
                   
                    ->select('atjh.*')
                    ->where('atjh.atjh_user_id',$user_id)
                    ->where('atjh.atjh_monthly_report_id',$get_monthly_report_id)
                    ->first();
         $jsv_ststus=DB::table('jsv')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')
                   
                    ->select('jsv.*')
                    ->where('jsv.jsv_user_id',$user_id)
                    ->where('jsv.jsv_monthly_report_id',$get_monthly_report_id)
                    ->first();

         $samayiksadhak_ststus=DB::table('samayiksadhak')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')
                   
                    ->select('samayiksadhak.*')
                    ->where('samayiksadhak.ss_user_id',$user_id)
                    ->where('samayiksadhak.ss_monthly_report_id',$get_monthly_report_id)
                    ->first();
         $tapoyagya_ststus=DB::table('tapoyagya')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')
                   
                    ->select('tapoyagya.*')
                    ->where('tapoyagya.tapoyaga_user_id',$user_id)
                    ->where('tapoyagya.tapoyaga_monthly_report_id',$get_monthly_report_id)
                    ->first();
        $cps_ststus=DB::table('cps')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')
                   
                    ->select('cps.*')
                    ->where('cps.cps_user_id',$user_id)
                    ->where('cps.cps_monthly_report_id',$get_monthly_report_id)
                    ->first();

        $pd_ststus=DB::table('pd')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')
                   
                    ->select('pd.*')
                    ->where('pd.pd_user_id',$user_id)
                    ->where('pd.pd_monthly_report_id',$get_monthly_report_id)
                    ->first();
       
        $barahvarat_ststus=DB::table('barahvarat')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')
                   
                    ->select('barahvarat.*')
                    ->where('barahvarat.bv_user_id',$user_id)
                    ->where('barahvarat.bv_monthly_report_id',$get_monthly_report_id)
                    ->first();
          $jvk_ststus=DB::table('jvk')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')
                   
                    ->select('jvk.*')
                    ->where('jvk.jvk_user_id',$user_id)
                    ->where('jvk.jvk_monthly_report_id',$get_monthly_report_id)
                    ->first();

          $yuvadivas_ststus=DB::table('yuvadivas')
              
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvadivas.report_id')
                   
                    ->select('yuvadivas.*')
                    ->where('yuvadivas.user_id',$user_id)
                    ->where('yuvadivas.report_id',$get_monthly_report_id)
                    ->first();




































        $monthly_report_months=DB::table('monthlyreports')  ->where('monthlyreports.user_id',$user_id)->get();
        return view('user/user-report-filer',compact('monthly_report','get_monthly_report','atdc_ststus','monthly_report_months','mbdd_ststus','ttf_ststus','yuvavahini_ststus','ampk_ststus','chokasatar_ststus','atjh_ststus','eyedonation_ststus','jsv_ststus','samayiksadhak_ststus','tapoyagya_ststus','cps_ststus','pd_ststus','barahvarat_ststus','jvk_ststus','yuvadivas_ststus'));
    }
    
    
    
    
    
    
    public function monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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

                            ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    
    public function atdc_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/atdc-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
     public function mbdd_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status' )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/mbdd-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    public function ttf_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/ttf-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    
    public function yuvavahini_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/yuvavahini-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    
    public function eye_donation_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/eye-donation-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    public function ampk_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/ampk-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
     public function chokasatar_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/chokasatar-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    public function jsv_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/jsv-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    public function ss_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/ss-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
     public function tapoyagya_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/tapoyagya-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
public function cps_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/cps-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    public function pd_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/pd-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    public function barahvarat_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/barahvarat-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
     public function jvk_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/jvk-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
    }
    
    public function yuvadivas_monthly_report_edit($id)
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


        $monthly_report=DB::table('monthlyreports')
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
                                 ->select('monthlyreports.*','atdc.*','mbdd.*','ttf.*','yuvavahini.*'
                        ,'eyedonation.*' ,'ampk.*','atjh.*','chokasatar.*','jsv.*','samayiksadhak.*','tapoyagya.*','cps.*','pd.*','barahvarat.*','jvk.*','yuvadivas.*', 'atdc.atdc_status AS atdc_status','mbdd.status AS mbdd_status',  'ttf.status AS ttf_status', 'yuvavahini.status As yuvavahini_status','eyedonation.status As eyedonation_status','ampk.status As ampk_status', 'atjh.atjh_status AS atjh_status','chokasatar.status AS chokasatar_status','jsv.status AS jsv_status','samayiksadhak.status As samayiksadhak_status','tapoyagya.status AS tapoyagya_status','cps.status AS cps_status','pd.status AS pd_status','barahvarat.status As barahvarat_status', 'jvk.status As jvk_status','yuvadivas.status AS yuvadivas_status', )
                            ->where('monthlyreports.id','=',$id)
                            ->first();
        return view('user/yuvadivas-monthly-report-edit',compact('user_list','branch_list','user','monthly_report'));
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
