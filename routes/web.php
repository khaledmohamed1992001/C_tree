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
    return view('home');
});
Route::get('about',function (){
    return view('about');
});

Route::get('/country','CountryController@getData')->name('country');

Route::get('map',function (){
    return view('map');
});

Route::get('search',function (){
    return view('search');
});

Route::get('spreed covid',function (){
    return view('spreed covid');
});

Route::get('symptoms',function (){
    return view('symptoms');
});
