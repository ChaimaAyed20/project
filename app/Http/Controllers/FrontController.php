<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Album;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function librariesByTheme($themeId)
    {

        $availableThemes = [
            'history',
            'geography',
            'quran',
            'sunnah',
            'digitalLibrary',
            'references'
        ];

        if (in_array($themeId, $availableThemes)) {
            return view("frontend.$themeId");
        }
    }

    
    public function galleries(){

        $galleries = Album::all();
        return view('frontend.gallery' , compact('galleries'));
    }
    public function topics(){
        return view('frontend.topic');
    }
    public function contact(){
        return view('frontend.contact');
    }
    public function schedules(){
        return view('frontend.schedules');
    }
    public function events(){
        return view('frontend.event');
    }
    public function eventsByCategory( $categoryId){
        return view('frontend.event');
    }
    public function eventDetails( $eventId){
        return view('frontend.eventDetails');
    }
    public function news(){
        $newsItems = News::all();
        return view('frontend.news', compact('newsItems'));
    }
    public function newsDetails( $newsId){
        return view('frontend.newsDetails');
    }


}
