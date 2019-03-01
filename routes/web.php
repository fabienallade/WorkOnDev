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

Route::get('/', function () {
    // return view('welcome');
    return view('site.home');
});
Route::get('mon_cv', function () {
    // return view('welcome');
    return view('site.cv');

})->name('mon_cv');
Route::get('signup', function () {
    // return view('welcome');
    return view('site.signup');

})->name('signup');
Route::get('solutions', function () {
    // return view('welcome');
    return view('site.solutions');

})->name('solutions');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
