<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Gate;

class ArticleController extends Controller
{
	public function __construct()
{
 $this->middleware('auth');
 $this->middleware(function($request, $next){
 if(Gate::allows('manage-articles')) return $next($request);
 abort(403, 'Anda tidak memiliki cukup hak akses');
 });

}

    public function article ($id) {
        $article = Article::find($id);
        // $articlesAll = json_decode(json_encode($articlesAll));
         return view('layouts.layout_post_uts', ['article'=>$article]);
     }

	public function index(){
		 $articles = Article::all();
		 return view('manage',['articles' => $articles]);
	}

	public function add(){
		return view('addarticle');
	}

	public function create(Request $request){
		 if ($request->file('featured_image')) {
            $image_name = $request->file('featured_image')->store('images', 'public');
        }

        Article::create([
            'title' => $request->title,
            'content' => $request->content,
            'featured_image' => $image_name,
            'writer' => $request->writer
        ]);
		 return redirect('/manage');
	}
	public function edit($id){
		 $article = Article::find($id);
		 return view('editarticle',['article'=>$article]);
	}

	public function update($id, Request $request){
		   $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;
        
        // remove image
        if($article->image && file_exists(storage_path('app/public/' . $article->image)))
        {
            \Storage::delete('public/'.$article->image);
        }
        // change with new image
        $image_name = $request->file('featured_image')->store('images', 'public');

        $article->image = $image_name;
        $article->writer = $request->writer;

        $article->save();

       

		 return redirect('/manage');
	}
	public function delete($id){
		 $article = Article::find($id);
		 $article->delete();
		 return redirect('/manage');
	}

}
