<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use PDF;
class SangathanManagementController extends Controller
{
   public function __construct()
    {
        $this->middleware('auth:web');
    }
    

     public function abtyp_direct_list()
    {
    	return view('user/sangathan/abtyp-direct');
    }


    public function fit_yuva_list(Request $request)
    {
         $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $user =auth::guard('web')->user();
        $user_id=$user->id;
        $fityuva_list=DB::table('fityuva')
                    ->leftJoin('users','users.id','fityuva.fit_yuva_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')
                    ->leftJoin('branches','branches.id','fityuva.fit_yuva_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','fityuva.*')
                    ->where('fit_yuva_date','!=', null)
              
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->where('users.id',$user_id)

                    ->get();
    	return view('user/sangathan/fit-yuva',compact('fityuva_list'));
    }



    public function jtn_list()
    {
    	return view('user/sangathan/jtn');
    }


    public function sankalp_sangathan_yatra_list()
    {
    	return view('user/sangathan/sankalp-sangathan-yatra');
    }


    public function sargam_list()
    {
    	return view('user/sangathan/sargam');
    }



    public function tkm_list(Request $request)
    {
         $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $user =auth::guard('web')->user();
        $user_id=$user->id;
        $ttk_list=DB::table('ttk')
                    ->leftJoin('users','users.id','ttk.tkm_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')
                    ->leftJoin('branches','branches.id','ttk.tkm_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttk.*')
                    ->where('tkm_name','!=', null)
                 
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->where('users.id',$user_id)

                    ->get();
    	return view('user/sangathan/tkm',compact('ttk_list'));
    }



    public function yuva_sangam_list(Request $request)
    {
         $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $user =auth::guard('web')->user();
        $user_id=$user->id;
         $yuvasangam_list=DB::table('yuvasangam')
                    ->leftJoin('users','users.id','yuvasangam.ys_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvasangam.ys_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvasangam.*')
                    ->where('ys_no_new_members','!=', null)
                  
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->where('users.id',$user_id)

                    ->get();
    	return view('user/sangathan/yuva-sangam',compact('yuvasangam_list'));
    }
      /*==================================================Filter =========================================================*/
    public function fityuva_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/sangathan/fityuva-report-filter',compact('parishad_list'));
    }


     public function ttk_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/sangathan/ttk-report-filter',compact('parishad_list'));
    }

     public function yuvasangam_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('user/sangathan/yuvasangam-report-filter',compact('parishad_list'));
    }

    public function tkm_pdfview(Request $request)
    {
         $items = DB::table('ttk')
                    ->leftJoin('users','users.id','ttk.tkm_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')
                    ->leftJoin('branches','branches.id','ttk.tkm_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttk.*')
                     ->where('ttk.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/sangathan/tkm-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='tkm'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/sangathan/tkm-pdf');
    }

    public function yuvasangam_pdfview(Request $request)
    {
         $items = DB::table('yuvasangam')
                    ->leftJoin('users','users.id','yuvasangam.ys_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvasangam.ys_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvasangam.*')
                     ->where('yuvasangam.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/sangathan/yuvasangam-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='yuvasangam'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/sangathan/yuvasangam-pdf');
    }

    public function fityuva_pdfview(Request $request)
    {
         $items = DB::table('fityuva')
                    ->leftJoin('users','users.id','fityuva.fit_yuva_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')
                    ->leftJoin('branches','branches.id','fityuva.fit_yuva_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','fityuva.*')
                     ->where('fityuva.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->download){
            $pdf = PDF::loadView('branch/sangathan/fityuva-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='fityuva'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('branch/sangathan/fityuva-pdf');
    }
    //PRINT
    public function ttk_print($id)
    {
        $items = DB::table('ttk')
                        ->leftJoin('users','users.id','ttk.tkm_user_id')
                        ->leftJoin('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')
                        ->leftJoin('branches','branches.id','ttk.tkm_branch_id')
                        ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttk.*')
                        ->where('ttk.id',$id)

                        ->first();
                        return view('branch/sangathan/tkm-pdf',compact('items'));
    }

    public function yuvasangam_print($id)
    {
        $items = DB::table('yuvasangam')
                        ->leftJoin('users','users.id','yuvasangam.ys_user_id')
                        ->leftJoin('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')
                        ->leftJoin('branches','branches.id','yuvasangam.ys_branch_id')
                        ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvasangam.*')
                        ->where('yuvasangam.id',$id)

                        ->first();
                        return view('branch/sangathan/yuvasangam-pdf',compact('items'));
    }

    public function fityuva_print($id)
    {
        $items = DB::table('fityuva')
                        ->leftJoin('users','users.id','fityuva.fit_yuva_user_id')
                        ->leftJoin('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')
                        ->leftJoin('branches','branches.id','fityuva.fit_yuva_branch_id')
                        ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','fityuva.*')
                        ->where('fityuva.id',$id)

                        ->first();
                        return view('branch/sangathan/fityuva-pdf',compact('items'));
    }
}
