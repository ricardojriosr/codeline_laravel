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

Route::auth();

Route::get('/', function () {
    return redirect()->route('films.index');
});

Route::get('films',[
    'uses'  => 'FilmController@index',
    'as'    => 'films.index'
]);

Route::get('/films/s/{slug}', [
    'uses'  => 'FilmController@showslug',
    'as'    => 'films.show'
]);

Route::get('/films/create', [
    'uses'  => 'FilmController@create',
    'as'    => 'films.create'
]);

Route::resource('comments', 'CommentController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
