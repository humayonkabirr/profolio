<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    public function index(){
        return view('frontend.home');
    }
  
    public function about(){
        return view('frontend.about');
    }
    public function service(){
        return view('frontend.service');
    }
    public function portfolio(){
        return view('frontend.portfolio');
    }
    public function blog(){
        return view('frontend.blog');
    }
    public function blogDetails(){
        return view('frontend.blogDetails');
    }
    public function contact(){
        return view('frontend.contact');
    }
  
}
