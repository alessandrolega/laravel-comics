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

Route::get('/comics', function () {
    
    $comic = config('comic');
    return view('comics', compact('comic'));
});

Route::get('/comics/{key}', function ($key){

    $comic = config('comic');

    if( is_numeric($key) && $key >= 0 && $key < count($comic)){
        $single_comic = $comic[$key];

    } else {
        abort(404);
    }

    // dd($single_comic);

    return view('show', compact('single_comic'));
})->name('show.singlecomic');
