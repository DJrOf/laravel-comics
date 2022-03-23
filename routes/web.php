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

    $comics = 
        config('comics', array());
   

    $data = ['comics' => $comics];

    return view('home', $data);
})->name('home');



Route::get('home/comics/{id}', function ($id) {

   

    $comics = config('comics', array());
   
    $comic = $comics[$id];

    return view('comic', compact('comic'));
})->name('comics');


