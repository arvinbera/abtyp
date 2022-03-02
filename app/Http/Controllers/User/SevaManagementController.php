<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use PDF;


class SevaManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function atdc_list(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));

        $user =auth::guard('web')->user();
        $user_id=$user->id;


        $atdc_list=DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
                    ->leftJoin('branches','branches.id','atdc.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','atdc.*')
                    ->where('center_name','!=', null)
                    
                    //->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->where('users.id',$user_id)
                    ->get();
    	return view('user/seva/atdc',compact('atdc_list'));
    }


    public function mbdd_list(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));

        $user =auth::guard('web')->user();
        $user_id=$user->id;
         $mbdds_list=DB::table('mbdd')
                    ->leftJoin('users','users.id','mbdd.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                    ->leftJoin('branches','branches.id','mbdd.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','mbdd.*')
                    ->where('date','!=', null)
                    
                    /*->whereBetween('monthlyreports.month', [$start_month, $end_month])*/
                    ->where('users.id',$user_id)
                    ->get();
    	return view('user/seva/mbdd',compact('mbdds_list'));
    }

    public function ttf_list(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
         $user =auth::guard('web')->user();
        $user_id=$user->id;
        $ttf_list=DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                    ->leftJoin('branches','branches.id','ttf.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttf.*')
                    ->where('ttf_date','!=', null)
                    
                    //->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->where('users.id',$user_id)
                    ->get();
    	return view('user/seva/ttf',compact('ttf_list'));
    }

    public function yuva_vahini_list(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
         $user =auth::guard('web')->user();
        $user_id=$user->id;
        $yuva_vahini_list=DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvavahini.yuva_vahini_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvavahini.*')
                    ->where('yuva_vahini_date_form','!=', null)
                   
                    //->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->where('users.id',$user_id)
                    ->get();
    	return view('user/seva/yuva-vahini',compact('yuva_vahini_list'));
    }

    public function eye_donation_list(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
         $user =auth::guard('web')->user();
        $user_id=$user->id;
         $eye_donation_list=DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                    ->leftJoin('branches','branches.id','eyedonation.eye_donate_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','eyedonation.*')
                    ->where('eye_donate_no_of_eye_donation','!=', null)
                   
                    //->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->where('users.id',$user_id)

                    ->get();
    	return view('user/seva/eye-donation',compact('eye_donation_list'));
    }

    public function ampk_list(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $user =auth::guard('web')->user();
        $user_id=$user->id;
         $ampk_list=DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                    ->leftJoin('branches','branches.id','ampk.ampk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ampk.*')
                    ->where('ampk_address','!=', null)
                 
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->where('users.id',$user_id)

                    ->get();
    	return view('user/seva/ampk',compact('ampk_list'));
    }

    public function atjh_list()
    {
    	return view('user/seva/atjh');
    }


    public function choka_satkar_list(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $user =auth::guard('web')->user();
        $user_id=$user->id;
        $cs_list=DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                    ->leftJoin('branches','branches.id','chokasatar.choka_satkar_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','chokasatar.*')
                    ->where('choka_satkar_date_form','!=', null)
                
                    //->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->where('users.id',$user_id)

                    ->get();
    	return view('user/seva/choka-satkar',compact('cs_list'));
    }




    /*==================================================Filter =========================================================*/
    public function atdc_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/seva/atdc-report-filter',compact('parishad_list'));
    }


     public function mbdd_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/seva/mbdd-report-filter',compact('parishad_list'));
    }

     public function ttf_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/seva/ttf-report-filter',compact('parishad_list'));
    }

     public function yuvavahini_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/seva/yuvavahini-report-filter',compact('parishad_list'));
    }


     public function eyedonation_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/seva/eyedonation-report-filter',compact('parishad_list'));
    }


     public function ampk_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/seva/ampk-report-filter',compact('parishad_list'));
    }



     public function chokasatar_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/seva/chokasatar-report-filter',compact('parishad_list'));
    }


    public function atjh_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/seva/atjh-report-filter',compact('parishad_list'));
    }
//PDF VIEW

public function atdc_pdfview(Request $request)
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

   //PRINT
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

        public function mbdd_print($id)
        {
            $items = DB::table('mbdd')
                            ->leftJoin('users','users.id','mbdd.user_id')
                            ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                            ->leftJoin('branches','branches.id','mbdd.branch_id')
                            ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','mbdd.*')
                            ->where('mbdd.id',$id)
                            ->first();
                            return view('branch/seva/mbdd-pdf',compact('items'));
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
}
