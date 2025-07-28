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
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Contact;


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
                        ->latest()
                        ->take(4)
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
    public function celebrities(Request $request)
    {
        $query = $request->input('query');

        $newsTunisia = News::with('categories')
            ->whereHas('categories', fn($q) => $q->where('designation_ar', 'تونس'))
            ->when($query, fn($q) => $q->where(function ($sub) use ($query) {
                $sub->where('designation_ar', 'LIKE', "%{$query}%")
                    ->orWhere('description_ar', 'LIKE', "%{$query}%");
            }))
            ->orderBy('publication', 'desc')
            ->paginate(6);

        $recentNews = News::with('categories')
                ->whereHas('categories', function ($query) {
                    $query->where('designation_ar', 'تونس');
                })
                ->orderBy('publication', 'desc')
                ->take(3)
                ->get();
        return view('frontend.celebrities', compact('newsTunisia', 'recentNews'));
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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'content' => 'required|string',
            'topic_id' => 'required|exists:news,id',
        ]);

        // 1. Vérifier si l'utilisateur est connecté
        if (Auth::check()) {
            $user = Auth::user();
        } else {
            // 2. Chercher un utilisateur avec cet email
            $user = User::where('email', $request->email)->first();

            // 3. S'il n'existe pas, on le crée
            if (!$user) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make('default123'), // Mot de passe temporaire
                ]);
            }
        }
        Comment::create([
            'content' => $request->content,
            'user_id' => $user->id,
            'topic_id' => $request->topic_id,
        ]);

        return back()->with('success', 'تم إضافة التعليق بنجاح.');
    }

    public function news(Request $request)
    {
        $query = $request->input('query');
        // Récupérer les news sauf celles ayant la catégorie "تونس"
        $newsItems = News::with(['author', 'categories']) // on ajoute categories ici
            ->whereDoesntHave('categories', function ($q) {
                $q->where('designation_ar', 'تونس');
            })
            ->when($query, function ($q) use ($query) {
                $q->where(function ($subQuery) use ($query) {
                    $subQuery->where('designation_ar', 'LIKE', "%{$query}%")
                            ->orWhere('description_ar', 'LIKE', "%{$query}%");
                });
            })
            ->orderBy('publication', 'desc')
            ->paginate(6);
        $recentNews = News::with('categories')
            ->whereDoesntHave('categories', function ($q) {
                $q->where('designation_ar', 'تونس');
            })
            ->orderBy('publication', 'desc')
            ->take(2)
            ->get();

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

    public function resetAutoIncrement()
    {
        DB::statement("ALTER TABLE events_category AUTO_INCREMENT = 1");
        return "Auto-increment reset à 1 !";
    }
    
    public function articlesByCategory($categoryId)
    {
        $categories = [
            'history' => 'تاريخ',
            'geography' => 'جغرافيا',
            'quran' => 'فلسطين في القرآن',
            'sunnah' => 'فلسطين في السّنة',
        ];

        if (!array_key_exists($categoryId, $categories)) {
            abort(404); // Si le slug est invalide
        }

        // Chercher la catégorie par son nom arabe
        $category = Category::where('name_ar', $categories[$categoryId])->first();

        if (!$category) {
            abort(404); // Si la catégorie n’existe pas en base
        }

        // Récupérer les archives associées
        $articles = $category->articles()->latest()->get();

        // Vue dynamique basée sur le slug (ex: frontend.history, frontend.geography, etc.)
        return view("frontend.$categoryId", compact('articles', 'categoryId', 'category'));
    }

    #public function contact(Request $request)
    #{
    /*   $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create([
            'designation_ar' => $request->name,
            'email'          => $request->email,
            'subject'        => $request->subject,
            'message'        => $request->message,
        ]);

        return redirect()->back()->with('success', 'تم إرسال رسالتك بنجاح، سنرد عليك قريباً.');
    }*/





}
