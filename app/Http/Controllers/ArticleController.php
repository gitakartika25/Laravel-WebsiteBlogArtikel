<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
	////Minggu 2///////
   /*
    public function articles($id) {
    	 return 'Halaman artikel dengan id' .$id;
    }
*/
////////Minggu 3//////////////////////
    /*
    public function article() {
    	return view('article', ['name' => 'Gita']);
    }
    */
/////////Minggu 4 Model///////////////
   
    /*public function getById($id){
    	$article = Article::find($id);
    	return view('article',['article=> $article']);
    }
    */
      public function __invoke($id)
    {
        // Cache::rememberForever('article:id:$id', function() use ($id) {
        //     return Article::find($id);
        // });
        // $article = Cache::get('article:id:$id');
        $article = Article::find($id);
        $article = json_decode(json_encode($article));

        return view('article', ['id'=>$id])->with(compact('article'));
    }
}
