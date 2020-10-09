<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gita() {
    	return 'Selamat Datang';
    }
     public function nama() {
    	 return 'NAMA : GITA KARTIKA PARIWARA <br> NIM : 1931710020';
    }
     public function articles($id) {
    	 return 'Halaman artikel dengan id' .$id;
    }

}
