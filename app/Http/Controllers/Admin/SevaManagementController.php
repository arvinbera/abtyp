<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use PDF;

class SevaManagementController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }



    public function atdc_list()
    {
       
        $atdc_list=DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
                    ->leftJoin('branches','branches.id','atdc.branch_id')
                    ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','atdc.*')
                    ->where('total_no_of_billing','!=', null)
                    
                   
                  
    	            ->get();
         $users_list=DB::table('users')->get();
        
    	return view('admin/seva/atdc',compact('atdc_list','users_list'));
    }


    public function mbdd_list()
    {
         
        $mbdds_list=DB::table('mbdd')
                    ->leftJoin('users','users.id','mbdd.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                    ->leftJoin('branches','branches.id','mbdd.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','mbdd.*')
                    ->where('name_of_camps','!=', null)
                    
    	            ->get();
         $users_list=DB::table('users')->get();
                    
        
    	return view('admin/seva/mbdd',compact('mbdds_list','users_list'));
    }

    public function ttf_list()
    {
        
        $ttf_list=DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                    ->leftJoin('branches','branches.id','ttf.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttf.*')
                    ->where('ttf_date','!=', null)
                    
    	            ->get();
         $users_list=DB::table('users')->get();
                    
    	return view('admin/seva/ttf',compact('ttf_list','users_list'));
    }

    public function yuva_vahini_list()
    {
        
        $yuva_vahini_list=DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvavahini.yuva_vahini_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvavahini.*')
                    ->where('yuva_vahini_date_form','!=', null)
                    
    	            ->get();
         $users_list=DB::table('users')->get();
                    
    	return view('admin/seva/yuva-vahini',compact('yuva_vahini_list','users_list'));
    }

    public function eye_donation_list()
    {
         
        $eye_donation_list=DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                    ->leftJoin('branches','branches.id','eyedonation.eye_donate_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','eyedonation.*')
                    ->where('eye_donate_no_of_eye_donation','!=', null)
                    
    	            ->get();
         $users_list=DB::table('users')->get();
                    
    	return view('admin/seva/eye-donation',compact('eye_donation_list','users_list'));
    }

    public function ampk_list()
    {
        
        $ampk_list=DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                    ->leftJoin('branches','branches.id','ampk.ampk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ampk.*')
                    ->where('ampk_address','!=', null)
                    
    	            ->get();
         $users_list=DB::table('users')->get();
                    
    	return view('admin/seva/ampk',compact('ampk_list','users_list'));
    }

    public function atjh_list(Request $request)
    {
        
        
    	return view('admin/seva/atjh');
    }


    public function choka_satkar_list()
    {
        
        $cs_list=DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                    ->leftJoin('branches','branches.id','chokasatar.choka_satkar_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','chokasatar.*')
                    ->where('choka_satkar_date_form','!=', null)
                   
    	            ->get();
         $users_list=DB::table('users')->get();
                    
    	return view('admin/seva/choka-satkar',compact('cs_list','users_list'));
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
                    ->where('atdc.branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                   
                  
                    ->get();
         $users_list=DB::table('users')->get();
        
        return view('admin/seva/atdc',compact('atdc_list','users_list','users_list'));
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
                    ->where('mbdd.branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
         $users_list=DB::table('users')->get();
                    
        
        return view('admin/seva/mbdd',compact('mbdds_list','users_list'));
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
                    ->where('ttf.branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
         $users_list=DB::table('users')->get();
                    
        return view('admin/seva/ttf',compact('ttf_list','users_list'));
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
                    ->where('yuvavahini.yuva_vahini_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
         $users_list=DB::table('users')->get();
                    
        return view('admin/seva/yuva-vahini',compact('yuva_vahini_list','users_list'));
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
                    ->where('eyedonation.eye_donate_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
         $users_list=DB::table('users')->get();
                    
        return view('admin/seva/eye-donation',compact('eye_donation_list','users_list'));
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
                    ->where('ampk.ampk_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
         $users_list=DB::table('users')->get();
                    
        return view('admin/seva/ampk',compact('ampk_list','users_list'));
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
                    ->where('chokasatar.choka_satkar_branch_id','=', $request->parisad_id)
                    ->whereBetween('monthlyreports.month', [$start_month, $end_month])
                    ->get();
         $users_list=DB::table('users')->get();
                    
        return view('admin/seva/choka-satkar',compact('cs_list','users_list'));
    }


    public function atjh_filter()
    {
        $parishad_list=DB::table('branches')->get();

        return view('admin/seva/atjh-report-filter',compact('parishad_list','users_list'));
    }
/*=====================================================================================================*/

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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/seva/atdc-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='atdc'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/seva/atdc-pdf');
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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/seva/mbdd-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='mbdd'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/seva/mbdd-pdf');
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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/seva/ttf-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='ttf'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/seva/ttf-pdf');
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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/seva/yuvavahini-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='yuvavahini'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/seva/yuvavahini-pdf');
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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/seva/eyedonation-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='eyedonation'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/seva/eyedonation-pdf');
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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/seva/ampk-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='ampk'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/seva/ampk-pdf');
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


        if($request->has('download')){
            $pdf = PDF::loadView('admin/seva/chokasatar-pdf');
            $date=date('Y/M', strtotime($request->monthly_report_month));
            $pdfname='chokasatar'.$date.'.pdf';
            
            return $pdf->download($pdfname);
        }


        return view('admin/seva/chokasatar-pdf');
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
                     return view('admin/seva/ampk-pdf',compact('items'));
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
                     return view('admin/seva/atdc-pdf',compact('items'));
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
                     return view('admin/seva/chokasatar-pdf',compact('items'));
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
                     return view('admin/seva/eyedonation-pdf',compact('items'));
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
                     return view('admin/seva/ttf-pdf',compact('items'));
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
                     return view('admin/seva/yuvavahini-pdf',compact('items'));
}

public function atdc_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('atdc')
                    ->leftJoin('users','users.id','atdc.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','atdc.monthly_report_id')
                    ->leftJoin('branches','branches.id','atdc.branch_id')
                    ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','atdc.*')
                    ->where('atdc.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/seva/atdc-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='atdc.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/seva/atdc-pdfs');
        }


    }
}



    public function mbdd_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('mbdd')
                    ->leftJoin('users','users.id','mbdd.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')
                    ->leftJoin('branches','branches.id','mbdd.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','mbdd.*')
                    ->where('mbdd.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/seva/mbdd-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='mbdd.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/seva/mbdd-pdfs');
        }


    }
}


    public function ttf_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items =DB::table('ttf')
                    ->leftJoin('users','users.id','ttf.user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ttf.monthly_report_id')
                    ->leftJoin('branches','branches.id','ttf.branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ttf.*')
                    ->where('ttf.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/seva/ttf-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='ttf.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/seva/ttf-pdfs');
        }


    }
}


  public function yuvavahini_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('yuvavahini')
                    ->leftJoin('users','users.id','yuvavahini.yuva_vahini_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')
                    ->leftJoin('branches','branches.id','yuvavahini.yuva_vahini_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','yuvavahini.*')
                    ->where('yuvavahini.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/seva/yuvavahini-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='yuvavahini.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/seva/yuvavahini-pdfs');
        }


    }
}


 




public function eyedonation_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('eyedonation')
                    ->leftJoin('users','users.id','eyedonation.eye_donate_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')
                    ->leftJoin('branches','branches.id','eyedonation.eye_donate_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','eyedonation.*')
                    ->where('eyedonation.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/seva/eyedonation-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='eyedonation.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/seva/eyedonation-pdfs');
        }


    }
}

public function ampk_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('ampk')
                    ->leftJoin('users','users.id','ampk.ampk_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')
                    ->leftJoin('branches','branches.id','ampk.ampk_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','ampk.*')
                    ->where('ampk.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/seva/ampk-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='ampk.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/seva/ampk-pdfs');
        }


    }
}


public function chokasatar_pdf_submit(Request $request)
{

        
    //return $request->atdccb;

    $data_array=array();
    foreach ($request->atdccb as $key => $value) {
     
    
    $items = DB::table('chokasatar')
                    ->leftJoin('users','users.id','chokasatar.choka_satkar_user_id')
                    ->leftJoin('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')
                    ->leftJoin('branches','branches.id','chokasatar.choka_satkar_branch_id')
                     ->select('users.name AS username','users.address AS address','monthlyreports.month AS monthly_report_month','branches.name As branch_name','chokasatar.*')
                    ->where('chokasatar.id',$value)

                    ->get();


                    array_push($data_array, $items);
    } 

    //return $data_array;
                    //dd($items);
    if (!empty($data_array)&& sizeof($data_array)>0) {
        
       foreach ($data_array as $key => $pdf_data) {
          
       
                        
            view()->share('items',$data_array);
        


            if($request->has('download')){
                $pdf = PDF::loadView('admin/seva/chokasatar-pdfs');
                //$date=date('Y/M', strtotime($pdf_data->monthly_report_month));
                $pdfname='chokasatar.pdf';
                
                return $pdf->download($pdfname);
            }
               return view('admin/seva/chokasatar-pdfs');
        }


    }
}



















































     



    






















}
