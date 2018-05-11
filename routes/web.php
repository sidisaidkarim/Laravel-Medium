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

Route::get('/', 'WelcomeController@index')->name('home');

//about routes
/*
Route::get('/about',function(){
  return view('about',[
    'name'=>'karim'
  ]);
});*/
//
// Route::get('/about','AboutController@index');
// Route::get('/inscription','InscriptionController@show');



Route::resource('posts','PostsController');
Route::resource('comments','CommentController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
