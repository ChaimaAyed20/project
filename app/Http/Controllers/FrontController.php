<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function speakers(){
        return view('frontend.speakers');
    }
    public function speakers_two(){
        return view('frontend.speakers_two');
    }
    public function speakers_three(){
        return view('frontend.speakers_three');
    }
    public function about_2(){
        return view('frontend.about_2');
    }
    public function about_3(){
        return view('frontend.about_3');
    }
    public function gallery(){
        return view('frontend.gallery');
    }
    public function pricing(){
        return view('frontend.pricing');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function schedules(){
        return view('frontend.schedules');
    }
    public function schedules2(){
        return view('frontend.schedules2');
    }
}
