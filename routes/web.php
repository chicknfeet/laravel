<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/home', function(){
    return view('home');
})->name('home');

Route::get('/profile', function(){
    return view('profile');
})->name('profile');

Route::get('/events', function(){
    return view('events');
})->name('events');

Route::get('/news', function(){
    return view('news');
})->name('news');

Route::get('/contact', function(){
    return view('contact');
})->name('contact');