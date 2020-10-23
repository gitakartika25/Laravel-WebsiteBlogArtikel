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
 


////////////////////////////////////////////////////

//Praktikum views minggu 3

Route::get('/home', function()  {
    return view('home', ['name' => 'Gita']);
});

Route::get('/home','HomeController@home');
Route::get('/about','AboutController@about');
Route::get('/article/{id}', 'ArticleController@article');
Route::get('/index', 'HomeController@index');
Route::get('/produk','HomeController@produk');


Route::get('/logout', function()  {
	$logout=Auth::logout();
	return view('pp.home2');

});

//PRAKTIKUM ORM//
Route::get('/manage', 'ArticleController@index')->name('manage');
Route::get('/addarticle','ArticleController@add');
Route::post('/article/create','ArticleController@create');
Route::get('/article/edit/{id}','ArticleController@edit');
Route::post('/article/update/{id}','ArticleController@update');
Route::get('/article/delete/{id}','ArticleController@delete');

//UTS// 
Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home_uts', 'HomeController@home_uts')->name('home_uts');
Route::get('/about_uts', 'AboutController@about_uts')->name('about_uts');


