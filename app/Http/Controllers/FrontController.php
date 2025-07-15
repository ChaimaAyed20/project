<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Album;
use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Coordonnee;

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
    public function contact()
    {
        $coordonnees = Coordonnee::first(); 
        return view('frontend.contact', compact('coordonnees'));
    }
    public function schedules(){
        return view('frontend.schedules');
    }
    public function events(){
        $events = Event::with('categories')->get();
        return view('frontend.event', compact('events'));
    }
    public function eventsByCategory($categoryId) {
        $events = Event::whereHas('categories', function ($query) use ($categoryId) {
        $query->where('events_category.id', $categoryId);
    })->get();
    return view('frontend.event', compact('events', 'categoryId'));
    }
    public function eventDetails( $eventId){
        return view('frontend.eventDetails');
    }
    public function news(){
        $newsItems = News::with('author')->orderBy('publication', 'desc')->get();
        $recentNews = News::orderBy('publication', 'desc')->take(2)->get();
        return view('frontend.news', compact('newsItems', 'recentNews'));
    }
    public function newsDetails( $newsId){
        $news = News::with('author')->findOrFail($newsId);
        $recentNews = News::where('id', '!=', $newsId)
                      ->orderBy('publication', 'desc')
                      ->take(2)
                      ->get();
        return view('frontend.newsDetails' , compact('news', 'recentNews') );
    }
    


}
