<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

use PDF;

class SangathanManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    

     public function abtyp_direct_list()
    {
    	return view('admin/sangathan/abtyp-direct');
    }


    public function fit_yuva_list()
    {
        
        $fityuva_list=DB::table('fityuva')
                    ->leftJoin('users','users.id','fityuva.fit_yuva_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')
                    ->leftJoin('branches','branches.id','fityuva.fit_yuva_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','fityuva.*')
                    ->where('fit_yuva_date','!=', null)
                   
                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('admin/sangathan/fit-yuva',compact('fityuva_list','users_list'));
    }



    public function jtn_list()
    {
    	return view('admin/sangathan/jtn');
    }


    public function sankalp_sangathan_yatra_list()
    {
    	return view('admin/sangathan/sankalp-sangathan-yatra');
    }


    public function sargam_list()
    {
    	return view('admin/sangathan/sargam');
    }



    public function tkm_list()
    {
        
        $ttk_list=DB::table('ttk')
                    ->leftJoin('users','users.id','ttk.tkm_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')
                    ->leftJoin('branches','branches.id','ttk.tkm_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttk.*')
                    ->where('tkm_name','!=', null)
                   
                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('admin/sangathan/tkm',compact('ttk_list','users_list'));
    }



    public function yuva_sangam_list()
    {
       
        $yuvasangam_list=DB::table('yuvasangam')
                    ->leftJoin('users','users.id','yuvasangam.ys_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvasangam.ys_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvasangam.*')
                    ->where('ys_no_new_members','!=', null)
                   
                    ->get();
                     $users_list=DB::table('users')->get();
    	return view('admin/sangathan/yuva-sangam',compact('yuvasangam_list','users_list'));
    }




    /*==================================================Filter =========================================================*/
    public function fityuva_filter(Request $request)
    {
       $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $fityuva_list=DB::table('fityuva')
                    ->leftJoin('users','users.id','fityuva.fit_yuva_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')
                    ->leftJoin('branches','branches.id','fityuva.fit_yuva_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','fityuva.*')
                    ->where('fit_yuva_date','!=', null)
                    ->where('fityuva.fit_yuva_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                     $users_list=DB::table('users')->get();
        return view('admin/sangathan/fit-yuva',compact('fityuva_list','users_list'));
    }


     public function ttk_filter(Request $request)
    {
        $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $ttk_list=DB::table('ttk')
                    ->leftJoin('users','users.id','ttk.tkm_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')
                    ->leftJoin('branches','branches.id','ttk.tkm_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttk.*')
                    ->where('tkm_name','!=', null)
                    ->where('ttk.tkm_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                     $users_list=DB::table('users')->get();
        return view('admin/sangathan/tkm',compact('ttk_list','users_list'));
    }

     public function yuvasangam_filter(Request $request)
    {
         $start_month= date('Y-m', strtotime($request->get('startmonth')));
        $end_month= date('Y-m', strtotime($request->get('endmonth')));
        $yuvasangam_list=DB::table('yuvasangam')
                    ->leftJoin('users','users.id','yuvasangam.ys_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvasangam.ys_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvasangam.*')
                    ->where('ys_no_new_members','!=', null)
                    ->where('yuvasangam.ys_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
                     $users_list=DB::table('users')->get();
        return view('admin/sangathan/yuva-sangam',compact('yuvasangam_list','users_list'));
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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sangathan/tkm-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='tkm'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sangathan/tkm-pdf');
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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sangathan/yuvasangam-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='yuvasangam'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sangathan/yuvasangam-pdf');
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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/sangathan/fityuva-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='fityuva'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/sangathan/fityuva-pdf');
    }



    /*================================================Print=======================================================*/
public function yuvasangam_print($id)
{
    $items = DB::table('yuvasangam')
                    ->leftJoin('users','users.id','yuvasangam.ys_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvasangam.ys_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvasangam.*')
                     ->where('yuvasangam.id',$id)

                     ->first();
                     return view('admin/sangathan/yuvasangam-pdf',compact('items'));
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
                     return view('admin/sangathan/fityuva-pdf',compact('items'));
}
public function ttk_print($id)
{
    $items = DB::table('ttk')
                    ->leftJoin('users','users.id','ttk.tkm_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')
                    ->leftJoin('branches','branches.id','ttk.tkm_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttk.*')
                     ->where('ttk.id',$id)

                     ->first();
                     return view('admin/sangathan/tkm-pdf',compact('items'));
}
public function ttk_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('ttk')
                    ->leftJoin('users','users.id','ttk.tkm_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')
                    ->leftJoin('branches','branches.id','ttk.tkm_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttk.*')
                    ->where('ttk.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sangathan/ttk-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='ttk.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sangathan/ttk-pdfs');
        }


    }
}

public function fityuva_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('fityuva')
                    ->leftJoin('users','users.id','fityuva.fit_yuva_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')
                    ->leftJoin('branches','branches.id','fityuva.fit_yuva_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','fityuva.*')
                    ->where('fityuva.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sangathan/fityuva-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='fityuva.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sangathan/fityuva-pdfs');
        }


    }
}

public function yuvasangam_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items =DB::table('yuvasangam')
                    ->leftJoin('users','users.id','yuvasangam.ys_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvasangam.ys_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvasangam.*')
                    ->where('yuvasangam.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/sangathan/yuvasangam-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='yuvasangam.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/sangathan/yuvasangam-pdfs');
        }


    }
}







}
