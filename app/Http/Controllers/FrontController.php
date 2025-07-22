<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Models\Album;
use App\Models\Event;
use App\Models\Comment;
use App\Models\Partner;
use App\Models\HomeInfo;
use App\Models\Coordonnee;
use App\Models\HomeSection;
use Illuminate\Http\Request;
use App\Models\ArchiveCategory;


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
        $conferenceArea = HomeSection::orderBy('id')->skip(0)->take(1)->first();
        $planningSections = HomeSection::orderBy('id')->skip(1)->take(1)->first();      
        return view('frontend.index', compact('recentNews', 'recentEvents', 'partners', 'comments','conferenceArea', 'planningSections' ));
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
        $event = Event::findOrFail($eventId);
        return view('frontend.eventDetails', compact('event'));
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
    
    public function archivesByCategory($categoryId)
    {
        $categories = [
            'history' => 'تاريخ',
            'geography' => 'جغرافيا',
            'quran' => 'فلسطين في القرآن',
            'sunnah' => 'فلسطين في السّنة',
            'digitalLibrary' => 'مكتبة رقمية',
            'references' => 'مراجع'
        ];

        if (!array_key_exists($categoryId, $categories)) {
            abort(404); // Si le slug est invalide
        }

        // Chercher la catégorie par son nom arabe
        $category = ArchiveCategory::where('designation_ar', $categories[$categoryId])->first();

        if (!$category) {
            abort(404); // Si la catégorie n’existe pas en base
        }

        // Récupérer les archives associées
        $archives = $category->archives()->latest()->get();

        // Vue dynamique basée sur le slug (ex: frontend.history, frontend.geography, etc.)
        return view("frontend.$categoryId", compact('archives', 'categoryId', 'category'));
    }



}
