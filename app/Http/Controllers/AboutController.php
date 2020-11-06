<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function __construct()
{
 $this->middleware('auth');
}
	////Minggu 2///////
   /*public function nama() {
    	 return 'NAMA : GITA KARTIKA PARIWARA <br> NIM : 1931710020';
    }
    ///////////////////////////////////////
*/
    ////////Minggu 3////////
    public function about() {
    	return view('about', ['name' => 'Gita']);
    }
 //UTS//
    public function about_uts() {
        return view('about_uts');
    }
}
