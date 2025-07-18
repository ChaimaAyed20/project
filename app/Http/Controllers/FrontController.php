<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Album;
use App\Models\Event;
use App\Models\Comment;
use App\Models\Partner;
use App\Models\Coordonnee;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $partners = Partner::all();
        $recentNews = News::orderBy('publication', 'desc')->take(3)->get();
        $recentEvents = Event::with('categories')
                        ->orderBy('start_date', 'desc')
                        ->take(3)
                        ->get();
        $comments = Comment::with('user')
                        ->orderBy('created_at', 'desc')
                        ->get();
        return view('frontend.index', compact('recentNews', 'recentEvents', 'partners', 'comments'));
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
        $comments = Comment::with('user') // si tu as une relation user
                        ->latest()
                        ->take(4)
                        ->get();
        return view('frontend.event', compact('events', 'comments'));
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
        $comments = Comment::with('user') // si tu as une relation user
                        ->latest()
                        ->take(4)
                        ->get();              
        return view('frontend.newsDetails' , compact('news', 'recentNews', 'comments') );
    }
    


}
