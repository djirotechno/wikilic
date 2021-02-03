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


Route::get('/projet',function(){

    return view('liste-projet');
});


Route::get('/projet-categorie/{id}',function(){

    return view('categorie-projet');
});


Route::get('/single-projet/{id}',function(){

    return view('single-projet');
});



Route::get('cree-projet',function(){

    return view('cree-projet');
});