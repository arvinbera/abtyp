<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Branch;
use App\User;
use App\Model\Userbranch;
use App\Model\Userpermission;
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
use Hash;
use DB;
use Auth;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
     public function user_index()
     {
         return view('user.stat-dashboard');
     }
    public function index()
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

        return view('user/dashboard',compact('user_list','branch_list','user'));
    }

    public function atdc_fetch($month,$branch_id){
        $user=Auth::guard('web')->user();
        
        $Monthlyreport = Monthlyreport::where('user_id',$user->id)->where('month',$month)->first();

        $atdc_data = Atdc::where('user_id',$user->id)->where('monthly_report_id',$Monthlyreport->id)->first();
        
        $mbdd_data = Mbdd::where('user_id',$user->id)->where('monthly_report_id',$Monthlyreport->id)->first();
        
        $ttf_data = Ttf::where('user_id',$user->id)->where('monthly_report_id',$Monthlyreport->id)->first();
        
        $yuvavahini_data = Yuvavahini::where('yuva_vahini_user_id',$user->id)->where('yuva_vahini_monthly_report_id',$Monthlyreport->id)->first();
        
        $eyedonation_data = Eyedonation::where('eye_donate_user_id',$user->id)->where('eye_donate_monthly_report_id',$Monthlyreport->id)->first();
        
        $ampk_data = Ampk::where('ampk_user_id',$user->id)->where('ampk_monthly_report_id',$Monthlyreport->id)->first();
        
        $chokasatar_data = Chokasatkar::where('choka_satkar_user_id',$user->id)->where('choka_satkar_monthly_report_id',$Monthlyreport->id)->first();
        
        $jsv_data = Jsv::where('jsv_user_id',$user->id)->where('jsv_monthly_report_id',$Monthlyreport->id)->first();
        
        $samayiksadhak_data = Samayiksadhak::where('ss_user_id',$user->id)->where('ss_monthly_report_id',$Monthlyreport->id)->first();
        
        $tapoyagya_data = Tapoyagya::where('tapoyaga_branch_id',$user->id)->where('tapoyaga_monthly_report_id',$Monthlyreport->id)->first();
        
        $cps_data = Cps::where('cps_user_id',$user->id)->where('cps_monthly_report_id',$Monthlyreport->id)->first();
        
        $pd_data = Pd::where('pd_user_id',$user->id)->where('pd_monthly_report_id',$Monthlyreport->id)->first();
        
        $barahvarat_data = Barahvarat::where('bv_user_id',$user->id)->where('bv_monthly_report_id',$Monthlyreport->id)->first();
        
        $twentyfivebol_data = Twentyfivebol::where('tbol_user_id',$user->id)->where('tbol_monthly_report_id',$Monthlyreport->id)->first();
        
        $jvk_data = Jvk::where('jvk_user_id',$user->id)->where('jvk_monthly_report_id',$Monthlyreport->id)->first();
        
        $fityuva_data = Fityuva::where('fit_yuva_user_id',$user->id)->where('fit_yuva_monthly_report_id',$Monthlyreport->id)->first();
        
        $yuvasangam_data = Yuvasangam::where('ys_user_id',$user->id)->where('ys_monthly_report_id',$Monthlyreport->id)->first();
        
        $tkm_data = Ttk::where('tkm_user_id',$user->id)->where('tkm_monthly_report_id',$Monthlyreport->id)->first();
        
        $yuvadivas_data = Yuvadivas::where('user_id',$user->id)->where('report_id',$Monthlyreport->id)->first();
        
        $data = array(
                   'atdc_data'  => $atdc_data,
                   'mbdd_data'  => $mbdd_data,
                   'ttf_data'  => $ttf_data,
                   'yuvavahini_data'  => $yuvavahini_data,
                   'eyedonation_data'  => $eyedonation_data,
                   'ampk_data'  => $ampk_data,
                   'chokasatar_data'  => $chokasatar_data,
                   'jsv_data'  => $jsv_data,
                   'samayiksadhak_data'  => $samayiksadhak_data,
                   'tapoyagya_data'  => $tapoyagya_data,
                   'cps_data'  => $cps_data,
                   'pd_data'  => $pd_data,
                   'barahvarat_data'  => $barahvarat_data,
                   'twentyfivebol_data'  => $twentyfivebol_data,
                   'jvk_data'  => $jvk_data,
                   'fityuva_data'  => $fityuva_data,
                   'yuvasangam_data'  => $yuvasangam_data,
                   'tkm_data'  => $tkm_data,
                   'monthly_report'  => $Monthlyreport,
                   'yuvadivas_data'  => $yuvadivas_data,
                  );
        return json_encode($data);
    }
    
    
    
    public function change_password_form()
    {
        $user =auth::guard('web')->user();
        $user_id=$user->id;
        $user_details = DB::Table('users')->where('id',$user_id)
    	->first();
        
        return view('user/change-password',compact('user_details'));
    }


    
     public function password_upadte(Request $request)
    {
        $this->validate($request, [
 
        'oldpassword' => 'required',
        'newpassword' => 'required|min:8',
        ]);
 
 
 
       $hashedPassword = Auth::user()->password;
 
       if (\Hash::check($request->oldpassword , $hashedPassword )) {
 
         if (!\Hash::check($request->newpassword , $hashedPassword)) {
 
              $users =User::find(Auth::user()->id);
              $users->password = bcrypt($request->newpassword);
              User::where( 'id' , Auth::user()->id)->update( array( 'password' =>  $users->password));
 
              session()->flash('message','Password updated successfully!');
              return redirect()->back();
            }
 
            else{
                  session()->flash('message','New password can not be the old password!');
                  return redirect()->back();
                }
 
           }
 
          else{
               session()->flash('message','Old password doesnt matched! ');
               return redirect()->back();
             }
 
       }
      public function members()
       {
           $user=Auth::guard('web')->user();
        $user_id=$user->name;
        //   $parishad_data=DB::Table('welcome_form_prashid_details')->where('prashid_user_id',$user_id)->get();
        $yuva_sangam=DB::Table('yuva_sangam_form_details')->where(['parishad_name' => $user_id, 'status' => 'Active'])->get();
           return view('user.members',compact('yuva_sangam'));
       }
       
       public function yuva_sangam_status_change(Request $request)
       {
          $ids = $request->ysstatus;

    DB::table('yuva_sangam_form_details')->whereIn('yuva_sangam_form_details_id', $ids)
    ->update(['status' => $request->status_value],['rejection_reson' => $request->rejection_reson]);
    return redirect()->back();
           
       }
       
       public function yuva_sangam()
       {
           $user=Auth::guard('web')->user();
        $user_id=$user->name;
           $yuva_sangam=DB::Table('yuva_sangam_form_details')->where(['parishad_name' => $user_id, 'status' => 'pending'])->get();
           return view('user.yuva-sangam',compact('yuva_sangam'));
       }
       
       
       public function t8members()
       {
           $user=Auth::guard('web')->user();
        $user_id=$user->id;
       $yuva_sangam=DB::Table('welcome_form_prashid_details')->where('prashid_user_id',$user_id)->get();
        //$yuva_sangam=DB::Table('yuva_sangam_form_details')->where(['parishad_name' => $user_id, 'status' => 'Active'])->get();
           return view('user.t8-members',compact('yuva_sangam'));
       }
       
       
       
       
       
       
}
