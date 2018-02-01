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
Route::get('/', 'PagesController@welcome');
Route::get('about', 'PagesController@about');
// Route::get('/', function () {
//     return view('welcome'); //welcome.blade.php
// });

// Route::get('about', function () {
//     return view('about'); //about.blade.php
// });





// Route::get('about', function () {
	// $bitfumes = ['This', 'is', 'sohel'];
	//     return view('about',['bit'=>$bitfumes]); //about.blade.php     //1. ['']
    // return view('about')->with(['bit'=>$bitfumes]); //about.blade.php  //1. with
    // return view('about')->withbit($bitfumes);  //1. withbit
//     $bitfumes = [''];
//     return view('about', compact('bitfumes'));   //1. compacr
// });