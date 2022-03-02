<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use PDF;


class SanskarManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

     public function jain_sanskar_vidhi_list()
    {
        
        $jsv_list=DB::table('jsv')
                    ->leftJoin('users','users.id','jsv.jsv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')
                    ->leftJoin('branches','branches.id','jsv.jsv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jsv.*')
                    ->where('jsv_date','!=', null)
                   
                    ->get();
                    $users_list=DB::table('users')->get();
    	return view('admin/sanskar/jain-sanskar-vidhi',compact('jsv_list','users_list'));
    }


     public function samayik_sadhak_list()
    {
        
        $ss_list=DB::table('samayiksadhak')
                    ->leftJoin('users','users.id','samayiksadhak.ss_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')
                    ->leftJoin('branches','branches.id','samayiksadhak.ss_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','samayiksadhak.*')
                    ->where('ss_date','!=', null)
                   
                    ->get();
                    $users_list=DB::table('users')->get();
    	return view('admin/sanskar/samayik-sadhak',compact('ss_list','users_list'));
    }    


     public function tapoyagya_list()
    {
        
        $tapoyagya_list=DB::table('tapoyagya')
                    ->leftJoin('users','users.id','tapoyagya.tapoyaga_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')
                    ->leftJoin('branches','branches.id','tapoyagya.tapoyaga_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','tapoyagya.*')
                    ->where('tapoyaga_date','!=', null)
                   
                    ->get();
                    $users_list=DB::table('users')->get();
    	return view('admin/sanskar/tapoyagya',compact('tapoyagya_list','users_list'));
    }

     public function cps_list()
    {
       
        $cps_list=DB::table('cps')
                    ->leftJoin('users','users.id','cps.cps_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')
                    ->leftJoin('branches','branches.id','cps.cps_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','cps.*')
                    ->where('cps_date','!=', null)
                  
                    ->get();
                    $users_list=DB::table('users')->get();
    	return view('admin/sanskar/cps',compact('cps_list','users_list'));
    }

     public function pd_list()
    {
       
          $pd_list=DB::table('pd')
                    ->leftJoin('users','users.id','pd.pd_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')
                    ->leftJoin('branches','branches.id','pd.pd_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','pd.*')
                    ->where('pd_date','!=', null)
                   
                    ->get();
                    $users_list=DB::table('users')->get();
    	return view('admin/sanskar/pd',compact('pd_list','users_list'));
    }

     public function barah_vrat_list()
    {
        
        $barahvarat_list=DB::table('barahvarat')
                    ->leftJoin('users','users.id','barahvarat.bv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')
                    ->leftJoin('branches','branches.id','barahvarat.bv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','barahvarat.*')
                    ->where('bv_date','!=', null)
                   
                    ->get();
                    $users_list=DB::table('users')->get();
    	return view('admin/sanskar/barah-vrat',compact('barahvarat_list','users_list'));
    }

     public function twenty_bol_list()
    {
       
       
         $twentyfivebol_list=DB::table('twentyfivebol')
                    ->leftJoin('users','users.id','twentyfivebol.tbol_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','twentyfivebol.tbol_monthly_report_id')
                    ->leftJoin('branches','branches.id','twentyfivebol.tbol_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','twentyfivebol.*')
                    ->where('tbol_date','!=', null)
                   
                    ->get();
                    $users_list=DB::table('users')->get();
    	return view('admin/sanskar/twenty-bol',compact('twentyfivebol_list','users_list'));
    }

     public function jain_vidhya_katyashala_list()
    {
       
         $jvk_list=DB::table('jvk')
                    ->leftJoin('users','users.id','jvk.jvk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')
                    ->leftJoin('branches','branches.id','jvk.jvk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jvk.*')
                    ->where('jvk_date','!=', null)
                   
                    ->get();
                    $users_list=DB::table('users')->get();
    	return view('admin/sanskar/jain-vidhya-katyashala',compact('jvk_list','users_list'));
    }

     public function yuva_divas_list()
    {
        
         $yuvadivas_list=DB::table('yuvadivas')
                    ->leftJoin('users','users.id','yuvadivas.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvadivas.report_id')
                    ->leftJoin('branches','branches.id','yuvadivas.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvadivas.*')
                    ->where('yd_date','!=', null)
                   
                    ->get();
                    $users_list=DB::table('users')->get();
    	return view('admin/sanskar/yuva-divas',compact('yuvadivas_list','users_list'));
    }







    /*==================================================Filter =========================================================*/
    public function jsv_filter(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $jsv_list=DB::table('jsv')
                    ->leftJoin('users','users.id','jsv.jsv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')
                    ->leftJoin('branches','branches.id','jsv.jsv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jsv.*')
                    ->where('jsv_date','!=', null)
                    ->where('jsv.jsv_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                    $users_list=DB::table('users')->get();
        return view('admin/sanskar/jain-sanskar-vidhi',compact('jsv_list','users_list'));
    }


     public function samayiksadhak_filter(Request $request)
    {
         $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $ss_list=DB::table('samayiksadhak')
                    ->leftJoin('users','users.id','samayiksadhak.ss_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')
                    ->leftJoin('branches','branches.id','samayiksadhak.ss_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','samayiksadhak.*')
                    ->where('ss_date','!=', null)
                    ->where('samayiksadhak.ss_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                    $users_list=DB::table('users')->get();
        return view('admin/sanskar/samayik-sadhak',compact('ss_list','users_list'));
    }

     public function tapoyagya_filter(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $tapoyagya_list=DB::table('tapoyagya')
                    ->leftJoin('users','users.id','tapoyagya.tapoyaga_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')
                    ->leftJoin('branches','branches.id','tapoyagya.tapoyaga_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','tapoyagya.*')
                    ->where('tapoyaga_date','!=', null)
                    ->where('tapoyagya.tapoyaga_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                    $users_list=DB::table('users')->get();
        return view('admin/sanskar/tapoyagya',compact('tapoyagya_list','users_list'));
    }

     public function cps_filter(Request $request)
    {
       $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $cps_list=DB::table('cps')
                    ->leftJoin('users','users.id','cps.cps_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')
                    ->leftJoin('branches','branches.id','cps.cps_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','cps.*')
                    ->where('cps_date','!=', null)
                    ->where('cps.cps_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                    $users_list=DB::table('users')->get();
        return view('admin/sanskar/cps',compact('cps_list','users_list'));
    }


     public function pd_filter(Request $request)
    {
       $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
          $pd_list=DB::table('pd')
                    ->leftJoin('users','users.id','pd.pd_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')
                    ->leftJoin('branches','branches.id','pd.pd_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','pd.*')
                    ->where('pd_date','!=', null)
                    ->where('pd.pd_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                    $users_list=DB::table('users')->get();
        return view('admin/sanskar/pd',compact('pd_list','users_list'));
    }


     public function barahvarat_filter(Request $request)
    {
         $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $barahvarat_list=DB::table('barahvarat')
                    ->leftJoin('users','users.id','barahvarat.bv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')
                    ->leftJoin('branches','branches.id','barahvarat.bv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','barahvarat.*')
                    ->where('bv_date','!=', null)
                    ->where('barahvarat.bv_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                    $users_list=DB::table('users')->get();
        return view('admin/sanskar/barah-vrat',compact('barahvarat_list','users_list'));
    }



     public function twentyfivebol_filter(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
         $twentyfivebol_list=DB::table('twentyfivebol')
                    ->leftJoin('users','users.id','twentyfivebol.tbol_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','twentyfivebol.tbol_monthly_report_id')
                    ->leftJoin('branches','branches.id','twentyfivebol.tbol_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','twentyfivebol.*')
                    ->where('tbol_date','!=', null)
                    ->where('twentyfivebol.tbol_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                    $users_list=DB::table('users')->get();
        return view('admin/sanskar/twenty-bol',compact('twentyfivebol_list','users_list'));
    }


    public function jvk_filter(Request $request)
    {
         $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
         $jvk_list=DB::table('jvk')
                    ->leftJoin('users','users.id','jvk.jvk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')
                    ->leftJoin('branches','branches.id','jvk.jvk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jvk.*')
                    ->where('jvk_date','!=', null)
                    ->where('jvk.jvk_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                    $users_list=DB::table('users')->get();
        return view('admin/sanskar/jain-vidhya-katyashala',compact('jvk_list','users_list'));
    }

     public function yuvadivas_filter(Request $request)
    {
         $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
         $yuvadivas_list=DB::table('yuvadivas')
                    ->leftJoin('users','users.id','yuvadivas.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvadivas.report_id')
                    ->leftJoin('branches','branches.id','yuvadivas.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvadivas.*')
                    ->where('yd_date','!=', null)
                    ->where('yuvadivas.branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                    $users_list=DB::table('users')->get();
        return view('admin/sanskar/yuva-divas',compact('yuvadivas_list','users_list'));
    }



/*=========================================PDF===================================================*/
    public function jsv_pdfview(Request $request)
    {
         $items =  $jsv_list=DB::table('jsv')
                    ->leftJoin('users','users.id','jsv.jsv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')
                    ->leftJoin('branches','branches.id','jsv.jsv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jsv.*')
                     ->where('jsv.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sanskar/jsv-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='jsv'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sanskar/jsv-pdf');
    }

    public function ss__pdfview(Request $request)
    {
         $items =  DB::table('samayiksadhak')
                    ->leftJoin('users','users.id','samayiksadhak.ss_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')
                    ->leftJoin('branches','branches.id','samayiksadhak.ss_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','samayiksadhak.*')
                     ->where('samayiksadhak.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sanskar/ss-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='ss'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sanskar/ss-pdf');
    }

    public function tapoyagya_pdfview(Request $request)
    {
         $items = DB::table('tapoyagya')
                    ->leftJoin('users','users.id','tapoyagya.tapoyaga_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')
                    ->leftJoin('branches','branches.id','tapoyagya.tapoyaga_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','tapoyagya.*')
                     ->where('tapoyagya.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sanskar/tapoyagya-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='tapoyagya'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sanskar/tapoyagya-pdf');
    }

    public function cps_pdfview(Request $request)
    {
         $items = DB::table('cps')
                    ->leftJoin('users','users.id','cps.cps_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')
                    ->leftJoin('branches','branches.id','cps.cps_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','cps.*')
                     ->where('cps.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sanskar/cps-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='cps'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sanskar/cps-pdf');
    }
    

     public function pd_pdfview(Request $request)
    {
         $items = DB::table('pd')
                    ->leftJoin('users','users.id','pd.pd_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')
                    ->leftJoin('branches','branches.id','pd.pd_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','pd.*')
                     ->where('pd.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sanskar/pd-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='pd'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sanskar/pd-pdf');
    }

    public function barah_varat_pdfview(Request $request)
    {
         $items = DB::table('barahvarat')
                    ->leftJoin('users','users.id','barahvarat.bv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')
                    ->leftJoin('branches','branches.id','barahvarat.bv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','barahvarat.*')
                     ->where('barahvarat.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sanskar/barah-vara-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='barah_vara'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sanskar/barah-vara-pdf');
    }

     public function twenty_five_bol_pdfview(Request $request)
    {
         $items = DB::table('twentyfivebol')
                    ->leftJoin('users','users.id','twentyfivebol.tbol_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','twentyfivebol.tbol_monthly_report_id')
                    ->leftJoin('branches','branches.id','twentyfivebol.tbol_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','twentyfivebol.*')
                     ->where('twentyfivebol.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sanskar/twenty_five_bo-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='twenty_five_bo'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sanskar/twenty_five_bo-pdf');
    }


 public function jvk_pdfview(Request $request)
    {
         $items = DB::table('jvk')
                    ->leftJoin('users','users.id','jvk.jvk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')
                    ->leftJoin('branches','branches.id','jvk.jvk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jvk.*')
                     ->where('jvk.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sanskar/jvk-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='jvk'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sanskar/jvk-pdf');
    }

    public function yuva_divas_pdfview(Request $request)
    {
         $items = DB::table('yuvadivas')
                    ->leftJoin('users','users.id','yuvadivas.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvadivas.report_id')
                    ->leftJoin('branches','branches.id','yuvadivas.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvadivas.*')
                     ->where('yuvadivas.id',$request->id)
                    
                    
                 
                    
                    ->first();
        view()->share('items',$items);


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sanskar/yuva_divas-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='yuva_divas'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sanskar/yuva_divas-pdf');
    }

    /*================================================Print=======================================================*/
public function bvl_print($id)
{
    $items = DB::table('barahvarat')
                    ->leftJoin('users','users.id','barahvarat.bv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')
                    ->leftJoin('branches','branches.id','barahvarat.bv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','barahvarat.*')
                     ->where('barahvarat.id',$id)

                     ->first();
                     return view('admin/sanskar/barah-vara-pdf',compact('items'));
}
public function cps_print($id)
{
    $items = DB::table('cps')
                    ->leftJoin('users','users.id','cps.cps_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')
                    ->leftJoin('branches','branches.id','cps.cps_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','cps.*')
                     ->where('cps.id',$id)

                     ->first();
                     return view('admin/sanskar/cps-pdf',compact('items'));
}

public function jsv_print($id)
{
    $items =DB::table('jsv')
                    ->leftJoin('users','users.id','jsv.jsv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')
                    ->leftJoin('branches','branches.id','jsv.jsv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jsv.*')
                     ->where('jsv.id',$id)

                     ->first();
                     return view('admin/sanskar/jsv-pdf',compact('items'));
}


public function jvk_print($id)
{
    $items =DB::table('jvk')
                    ->leftJoin('users','users.id','jvk.jvk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')
                    ->leftJoin('branches','branches.id','jvk.jvk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jvk.*')
                     ->where('jvk.id',$id)

                     ->first();
                     return view('admin/sanskar/jvk-pdf',compact('items'));
}

public function pd_print($id)
{
    $items =DB::table('pd')
                    ->leftJoin('users','users.id','pd.pd_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')
                    ->leftJoin('branches','branches.id','pd.pd_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','pd.*')
                     ->where('pd.id',$id)

                     ->first();
                     return view('admin/sanskar/pd-pdf',compact('items'));
}
public function ss_print($id)
{
    $items =DB::table('samayiksadhak')
                    ->leftJoin('users','users.id','samayiksadhak.ss_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')
                    ->leftJoin('branches','branches.id','samayiksadhak.ss_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','samayiksadhak.*')
                     ->where('samayiksadhak.id',$id)

                     ->first();
                     return view('admin/sanskar/ss-pdf',compact('items'));
}

public function tapoyagya_print($id)
{
    $items = DB::table('tapoyagya')
                    ->leftJoin('users','users.id','tapoyagya.tapoyaga_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')
                    ->leftJoin('branches','branches.id','tapoyagya.tapoyaga_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','tapoyagya.*')
                     ->where('tapoyagya.id',$id)
                     ->first();
                     return view('admin/sanskar/tapoyagya-pdf',compact('items'));
}


public function tfbl_print($id)
{
    $items = DB::table('twentyfivebol')
                    ->leftJoin('users','users.id','twentyfivebol.tbol_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','twentyfivebol.tbol_monthly_report_id')
                    ->leftJoin('branches','branches.id','twentyfivebol.tbol_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','twentyfivebol.*')
                     ->where('twentyfivebol.id',$id)
                     ->first();
                     return view('admin/sanskar/twenty_five_bo-pdf',compact('items'));
}

public function yuvadivas_print($id)
{
    $items = DB::table('yuvadivas')
                    ->leftJoin('users','users.id','yuvadivas.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvadivas.report_id')
                    ->leftJoin('branches','branches.id','yuvadivas.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvadivas.*')
                     ->where('yuvadivas.id',$id)
                     ->first();
                     return view('admin/sanskar/yuva_divas-pdf',compact('items'));
}

public function barahvarat_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('barahvarat')
                    ->leftJoin('users','users.id','barahvarat.bv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')
                    ->leftJoin('branches','branches.id','barahvarat.bv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','barahvarat.*')
                    ->where('barahvarat.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sanskar/barahvarat-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='barahvarat.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sanskar/barahvarat-pdfs');
        }


    }
}
    

    public function cps_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('cps')
                    ->leftJoin('users','users.id','cps.cps_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')
                    ->leftJoin('branches','branches.id','cps.cps_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','cps.*')
                    ->where('cps.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sanskar/cps-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='cps.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sanskar/cps-pdfs');
        }


    }
}
 public function jsv_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('jsv')
                    ->leftJoin('users','users.id','jsv.jsv_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')
                    ->leftJoin('branches','branches.id','jsv.jsv_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jsv.*')
                    ->where('jsv.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sanskar/jsv-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='jsv.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sanskar/jsv-pdfs');
        }


    }
}

public function jvk_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('jvk')
                    ->leftJoin('users','users.id','jvk.jvk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')
                    ->leftJoin('branches','branches.id','jvk.jvk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','jvk.*')
                    ->where('jvk.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sanskar/jvk-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='jvk.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sanskar/jvk-pdfs');
        }


    }
}
  
  public function pd_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('pd')
                    ->leftJoin('users','users.id','pd.pd_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')
                    ->leftJoin('branches','branches.id','pd.pd_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','pd.*')
                    ->where('pd.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sanskar/pd-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='pd.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sanskar/pd-pdfs');
        }


    }
}

public function samayiksadhak_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('samayiksadhak')
                    ->leftJoin('users','users.id','samayiksadhak.ss_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')
                    ->leftJoin('branches','branches.id','samayiksadhak.ss_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','samayiksadhak.*')
                    ->where('samayiksadhak.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sanskar/samayiksadhak-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='samayiksadhak.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sanskar/samayiksadhak-pdfs');
        }


    }
}

public function tapoyagya_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('tapoyagya')
                    ->leftJoin('users','users.id','tapoyagya.tapoyaga_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')
                    ->leftJoin('branches','branches.id','tapoyagya.tapoyaga_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','tapoyagya.*')
                    ->where('tapoyagya.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sanskar/tapoyagya-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='tapoyagya.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sanskar/tapoyagya-pdfs');
        }


    }
}
    

    public function twentyfivebol_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('twentyfivebol')
                    ->leftJoin('users','users.id','twentyfivebol.tbol_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','twentyfivebol.tbol_monthly_report_id')
                    ->leftJoin('branches','branches.id','twentyfivebol.tbol_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','twentyfivebol.*')
                    ->where('twentyfivebol.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sanskar/twentyfivebol-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='twentyfivebol.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sanskar/twentyfivebol-pdfs');
        }


    }
}
 

   public function yuvadivas_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('yuvadivas')
                    ->leftJoin('users','users.id','yuvadivas.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvadivas.report_id')
                    ->leftJoin('branches','branches.id','yuvadivas.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvadivas.*')
                    ->where('yuvadivas.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sanskar/yuvadivas-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='yuvadivas.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sanskar/yuvadivas-pdfs');
        }


    }
}
 




}
