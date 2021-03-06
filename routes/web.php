<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'PageController@about')->name('about');

Route::get('/help', 'PageController@help')->name('help');

Route::get('/contact', 'PageController@contact')->name('contact');

Route::get('/how-it-work', 'PageController@how_it_works')->name('how_it_works');
