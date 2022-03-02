<?php

namespace App\Http\Controllers\Admin;

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
        $this->middleware('auth:admin');
    }
    
   public function news_list()
    {
        	$news_rs=DB::Table('newes')->get();
        return view('admin/news-list',compact('news_rs'));
    }
     public function news_details($id)
    {
        	$news_rss=DB::Table('newes')->where('id','=',$id)->first();
        return view('admin/news-details',compact('news_rss'));
    }
    public function booked_slots()
    
    {
        
        $bokked_slot=Booksloat::get();
        return view('admin/list-of-booked-slot',compact('bokked_slot'));
    }
    
}