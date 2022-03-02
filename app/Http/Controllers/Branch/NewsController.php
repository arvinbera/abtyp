<?php

namespace App\Http\Controllers\Branch;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Booksloat;
use App\Model\News;
use Validator;
use Session;
use DB;
use Auth;
use PDF;



class NewsController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth:branch');
    }
    
   public function news_list()
    {
        	$news_rs=DB::Table('newes')->get();
        return view('branch/news-list',compact('news_rs'));
    }
     public function news_details($id)
    {
        	$news_rss=DB::Table('newes')->where('id','=',$id)->first();
        return view('branch/news-details',compact('news_rss'));
    }
    public function booked_slot()
    
    {
         $user=Auth::guard('branch')->user();
        $user_name=$user->name;
        $bokked_slot=Booksloat::where('project_on','=',$user_name)->get();
        return view('branch/list-of-booked-slot',compact('bokked_slot'));
    }
    public function tapoyagya_report()
    {
       
        $tapoyagya_report=DB::Table('tapoyagya_data')->get();
        
        return view('branch.tapoyagya-report',compact('tapoyagya_report'));
    }
    
}