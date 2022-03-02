<?php

namespace App\Http\Controllers\Branch;


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
use DB;
use Auth;
use PDF;

class NewMonthlyReportcontroller extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:branch');
    }
     public function atdcFormView()
    {
         $user=Auth::guard('branch')->user();
        $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
          $monthly_report=DB::table('atdc')->join('monthlyreports','monthlyreports.id','atdc.monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','atdc.*', ) ->where('monthlyreports.user_id',$user_id)->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-atdc-form-view',compact('monthly_report','user','branchh'));
    }
    public function atdc_status($id)
    {
     DB::table('atdc')->where('atdc.id',$id)->update(array('atdc_status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }
  public function mbddFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
             $monthly_report=DB::table('mbdd')->join('monthlyreports','monthlyreports.id','mbdd.monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','mbdd.*', )->get();
  
            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
         // dd($monthly_report); 
        return view('branch/new-mbdd-form-view',compact('monthly_report','user','branchh'));
    }
    public function mbdd_status($id)
    {
     DB::table('mbdd')->where('mbdd.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

      public function ttfFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
         $monthly_report=DB::table('ttf')->join('monthlyreports','monthlyreports.id','ttf.monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','ttf.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-ttf-form-view',compact('monthly_report','user','branchh'));
    }
    public function ttf_status($id)
    {
     DB::table('ttf')->where('ttf.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

    public function yvFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
              $monthly_report=DB::table('yuvavahini')->join('monthlyreports','monthlyreports.id','yuvavahini.yuva_vahini_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','yuvavahini.*', )->get();

         

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-yv-form-view',compact('monthly_report','user','branchh'));
    }
    public function yv_status($id)
    {
     DB::table('yuvavahini')->where('yuvavahini.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

    public function edFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
              $monthly_report=DB::table('eyedonation')->join('monthlyreports','monthlyreports.id','eyedonation.eye_donate_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','eyedonation.*',)->get();

         

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-ed-form-view',compact('monthly_report','user','branchh'));
    }
    public function ed_status($id)
    {
     DB::table('eyedonation')->where('eyedonation.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

   public function ampkFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
             $monthly_report=DB::table('ampk')->join('monthlyreports','monthlyreports.id','ampk.ampk_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','ampk.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-ampk-form-view',compact('monthly_report','user','branchh'));
    }
    public function ampk_status($id)
    {
     DB::table('ampk')->where('ampk.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

    public function csFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
             $monthly_report=DB::table('chokasatar')->join('monthlyreports','monthlyreports.id','chokasatar.choka_satkar_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','chokasatar.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-cs-form-view',compact('monthly_report','user','branchh'));
    }
    public function cs_status($id)
    {
     DB::table('chokasatar')->where('chokasatar.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

    public function jsvFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
             $monthly_report=DB::table('jsv')->join('monthlyreports','monthlyreports.id','jsv.jsv_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','jsv.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-jsv-form-view',compact('monthly_report','user','branchh'));
    }
    public function jsv_status($id)
    {
     DB::table('jsv')->where('jsv.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

    public function ssFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
             $monthly_report=DB::table('samayiksadhak')->join('monthlyreports','monthlyreports.id','samayiksadhak.ss_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','samayiksadhak.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-ss-form-view',compact('monthly_report','user','branchh'));
    }
    public function ss_status($id)
    {
     DB::table('samayiksadhak')->where('samayiksadhak.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

   public function tapoFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
            $monthly_report=DB::table('tapoyagya')->join('monthlyreports','monthlyreports.id','tapoyagya.tapoyaga_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','tapoyagya.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-tapo-form-view',compact('monthly_report','user','branchh'));
    }
    public function tapo_status($id)
    {
     DB::table('tapoyagya')->where('tapoyagya.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }



   public function cpsFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
            $monthly_report=DB::table('cps')->join('monthlyreports','monthlyreports.id','cps.cps_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','cps.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-cps-form-view',compact('monthly_report','user','branchh'));
    }
    public function cps_status($id)
    {
     DB::table('cps')->where('cps.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

   public function pdFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
          $monthly_report=DB::table('pd')->join('monthlyreports','monthlyreports.id','pd.pd_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','pd.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-pd-form-view',compact('monthly_report','user','branchh'));
    }
    public function pd_status($id)
    {
     DB::table('pd')->where('pd.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }



    public function bvFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
          $monthly_report=DB::table('barahvarat')->join('monthlyreports','monthlyreports.id','barahvarat.bv_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','barahvarat.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-bv-form-view',compact('monthly_report','user','branchh'));
    }
    public function bv_status($id)
    {
     DB::table('barahvarat')->where('barahvarat.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

    public function jvkFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
           $monthly_report=DB::table('jvk')->join('monthlyreports','monthlyreports.id','jvk.jvk_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','jvk.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-jvk-form-view',compact('monthly_report','user','branchh'));
    }
    public function jvk_status($id)
    {
     DB::table('jvk')->where('jvk.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

   public function tkmFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
          $monthly_report=DB::table('ttk')->join('monthlyreports','monthlyreports.id','ttk.tkm_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','ttk.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-tkm-form-view',compact('monthly_report','user','branchh'));
    }
    public function tkm_status($id)
    {
     DB::table('ttk')->where('ttk.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

    public function ysFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
         $monthly_report=DB::table('yuvasangam')->join('monthlyreports','monthlyreports.id','yuvasangam.ys_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','yuvasangam.*', )->get();

            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-ys-form-view',compact('monthly_report','user','branchh'));
    }
    public function ys_status($id)
    {
     DB::table('yuvasangam')->where('yuvasangam.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }

    public function fyFormView()
    {
         $user=Auth::guard('branch')->user();
         $user_id=$user->id;
            $branchh=Auth::guard('branch')->user();
          $monthly_report=DB::table('fityuva')->join('monthlyreports','monthlyreports.id','fityuva.fit_yuva_monthly_report_id')->leftJoin('users','users.id','monthlyreports.user_id') ->select('users.name AS username','monthlyreports.month AS monthly_report_month','monthlyreports.id AS id','monthlyreports.email_id','monthlyreports.ecw_meeting_date','monthlyreports.filled_by','monthlyreports.filled_by_role','monthlyreports.month','monthlyreports.other_activity','fityuva.*', )->get();
            $monthly_report_months=DB::table('monthlyreports')->where('monthlyreports.user_id',$user_id)->get();
        //dd($monthly_report);      
        return view('branch/new-fy-form-view',compact('monthly_report','user','branchh'));
    }
    public function fy_status($id)
    {
     DB::table('fityuva')->where('fityuva.id',$id)->update(array('status' => 'accept'));
     //return redirect()->route('branch.atdc-form-view');
     return redirect()->back();

    }


 
}