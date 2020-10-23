<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
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
		Article::create([
		 'title' => $request->title,
		 'content' => $request->content,
		 'featured_image' => $request->image
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
		 $article->featured_image = $request->image;
		 $article->save();
		 return redirect('/manage');
	}
	public function delete($id){
		 $article = Article::find($id);
		 $article->delete();
		 return redirect('/manage');
	}

}
