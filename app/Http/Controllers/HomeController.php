<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
   public function index()
    {
        return view('home');
    }
    
    
//UTS//
    public function home_uts() {
        $articles=Article::all();
        return view('home_uts',['articles'=>$articles]);
    }
     public function manage() {
        return view('manage');
    }
}
