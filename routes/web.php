<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
///////////////////////////////////////////////////
//Praktikum routing minggu 2

/*
//Prak 1 nomor 1
Route::get('/hello', function () {
return 'Selamat Datang';
});


Route::get('/about', function()  {
    return 'NAMA : GITA KARTIKA PARIWARA <br> NIM : 1931710020';
});
Route::get('/articles/{id}', function($id)  {
    return 'Halaman artikel dengan id' .$id;
    });
    */

/*
Route::get('/', 'PageController@gita'); 
Route::get('/nim', 'PageController@nama'); 
Route::get('/articles/{id}', 'PageController@articles'); 
*/

/*Route::get('/', 'HomeController@gita'); 
Route::get('/nim', 'AboutController@nama'); 
Route::get('/articles/{id}', 'ArticleController@articles'); 
*/

////////////////////////////////////////////////////

//Praktikum views minggu 3

/*Route::get('/home', function()  {
    return view('home', ['name' => 'Gita']);
});
*/

Route::get('/home','HomeController@home');
Route::get('/about','AboutController@about');
Route::get('/article','ArticleController@article');
Route::get('/article/{id}', 'ArticleController');
Route::get('/index', 'HomeController@index');
Route::get('/produk','HomeController@produk');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');

Route::get('/logout', function()  {
	$logout=Auth::logout();
    return view('pp.home2');
});