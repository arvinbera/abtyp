<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\News;
use App\Model\Newsgallery;
use App\Model\Booksloat;
use Validator;
use Session;
use DB;
use Auth;
use PDF;
use Illuminate\Support\Facades\Mail;



class NewsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:web');
    }
    
   public function news_form()
    {
        	$user=Auth::guard('web')->user();
        return view('user/news-form',compact('user'));
    }
    
    public function news_submit(Request $request)
    {
    	$validator=Validator::make($request->all(),[
		'title'=>'required',
		'image'=>'required',
		'submitted_by'=>'required',

		
		],
		[
		'title.required'=>'Event Name Required',
		'Image.required'=>'Image Required',
		'submitted_by.required'=>'This Feild Required',

		
		
		]);
		
		if($validator->fails())
		{
			return redirect('user/news')->withErrors($validator)->withInput();
			
		}
		  
                                if($request->hasfile('image'))
                        {
                        	foreach($request->file('image') as $image)
                        	{
                        	$name=$image->getClientOriginalName();
                        	$image->move(public_path().'/newsimage',$name);
                        	$data[]=$name;
                        	}
                        }
		
		$news = new News([
			
            'title' => $request->input('title'),
            'newsdetails' => $request->input('newsdetails'),
             'user_id' => $request->input('user_id'),
             'submitted_by' => $request->input('submitted_by'),

              'user_name' => $request->input('user_name'),
                'image' => json_encode($data),
           
         


           
        ]);

        $news->save();
        $input =$request->all();
        $title=$input['title'];
        $newsdetails=$input['newsdetails'];
        $submitted_by=$input['submitted_by'];
        
        
        Mail::send('user.mail',[ 'title' => $title,'newsdetails' => $newsdetails,'submitted_by' => $submitted_by], function($message) use ($input) {
            $message->from('avsbera@gmail.com', 'ABTYP News');
            $message->to('avishekberapro@gmail.com');
            $message->bcc(array('avishek.dits@gmail.com'));
            $message->subject('Abtyp New News Submitted');
        }); 
		
		
		
	
		Session::flash('message','News Successfully Saved.');
		return redirect('user/news');
    }
    public function news_list()
    {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        
        	$news_rs=DB::Table('newes')->where('user_id','=',$user_id)->get();
        return view('user/news-list',compact('news_rs'));
    }
     public function news_details($id)
    {
        	$news_rss=DB::Table('newes')->where('id','=',$id)->first();
        return view('user/news-details',compact('news_rss'));
    }
     
     public function SlotBook()
     {
         $parisad_name=DB::Table('branches')->get();
         	$user=Auth::guard('web')->user();
         return view('user/book-slot',compact('user','parisad_name'));
     }
     public function SlotBookSubmit(Request $request)
     {
         $validator=Validator::make($request->all(),[
		'project_on'=>'required',
		'tentative_date'=>'required',
		'tentative_date_to'=>'required',
		'description'=>'required',
		],
		[
		'project_on.required'=>'This Feild is Required',
		'tentative_date.unique'=>'This Feild is Required',
		'description.unique'=>'This Feild is Required',
		
		]);
		
		if($validator->fails())
		{
			return redirect('user/book-slot')->withErrors($validator)->withInput();
			
		}
		$data = $request->all();
		$data=request()->except(['_token']);
		
		//dd($data);
		$Booksloat=new Booksloat();
		$Booksloat->create($data);
		Session::flash('message','Your Slot Successfully Saved');
		return redirect('user/book-slot');
         
     }
     public function SlotBookList()
     {
         $user=Auth::guard('web')->user();
        $user_id=$user->id;
         $bokked_slot=Booksloat::where('user_id','=',$user_id)->get();
         return view('user/list-of-booked-slot',compact('bokked_slot'));
     }

     public function ViewSlotBookList($id)
     {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
         $bokked_slot=Booksloat::where('user_id','=',$user_id)->where('id',$id)->first();
         return view('user/view-of-booked-slot',compact('bokked_slot'));


     }
     public function EditSlotBookList($id)
     {
        $user=Auth::guard('web')->user();
        $user_id=$user->id;
        $users=Auth::guard('web')->user();
        $parisad_name=DB::Table('branches')->get();

         $bokked_slot=Booksloat::where('user_id','=',$user_id)->where('id',$id)->first();
         return view('user/edit-of-booked-slot',compact('bokked_slot','users','parisad_name'));

     }
     public function Edit_submit_SlotBookList(Request $request)
     {
         $update_slot =  DB::Table('book_sloats')->where('id',$request->slot_id)->limit(1)
        ->update(array('project_on' =>$request->project_on ,'tentative_date' => $request->tentative_date,'description'=>$request->description));

         if (isset($update_slot)){

            Session::flash('message','Slot Successfully Updated.');
            return redirect()->back();

        }else{

            Session::flash('errormessage','Failed!');
            return redirect()->back();
        }
     }
    public function news_edit($id)
    {
        $news_rss=DB::Table('newes')->where('id','=',$id)->first();
        return view('user/news-edit',compact('news_rss'));

    }
    public function news_update(Request $request)
    {
        $update_news =  DB::Table('newes')->where('id',$request->news_id)->limit(1)
        ->update(array('title' =>$request->title ,'newsdetails' => $request->newsdetails,'submitted_by'=>$request->submitted_by));

         if (isset($update_news)){

            Session::flash('message','News Successfully Updated.');
            return redirect()->back();

        }else{

            Session::flash('errormessage','Failed!');
            return redirect()->back();
        }

    }
     public function yuva_sangam_details($id)
    {
        	$yuva_sangam=DB::Table('yuva_sangam_form_details')->where('yuva_sangam_form_details_id','=',$id)->first();
        return view('user/yuva-sangam-details',compact('yuva_sangam'));
    }
    public function membersdetails($id)
    {
        	$data=DB::Table('welcome_form_prashid_details')->where('welcome_form_prashid_details_id','=',$id)->first();
        return view('user/members-details',compact('data'));
    }
    public function tapoyagya_report()
    {
        $user=Auth::guard('web')->user();
        $user_id=$user->name;
        $tapoyagya_report=DB::Table('tapoyagya_data')->where('parishad_name',$user_id)->get();
        
        return view('user.tapoyagya-report',compact('tapoyagya_report'));
    }
    public function barahvrat_registration_form_list()
    {
        $user=Auth::guard('web')->user();
        $user_id=$user->name;
        $barahvrat_registration_form_list=DB::Table('barahvrat_registration_form')->where('parishad_name',$user_id)->get();
        return view('user.barahvrat-registration-form-list',compact('barahvrat_registration_form_list'));
    }
    public function yuva_vahini_reg_slot_list()
    {
        $user=Auth::guard('web')->user();
        $user_id=$user->name;
        $data=DB::Table('yuva_vahini_registration_reg_data')->where('parishad_name',$user_id)->get();
        return view('user.yuva-vahini-reg-slot-list', compact('data'));
    }
    
}