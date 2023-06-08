<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\eventsController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\newsController;
use App\Http\Controllers\profileController;

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

Route::get('/landing',[landingController::class,'index'])->name('landing');
Route::get('/home',[homeController::class,'index'])->name('home');
Route::get('/profile',[profileController::class,'index'])->name('profile');
Route::get('/events',[eventsController::class,'index'])->name('events');
Route::get('/news',[newsController::class,'index'])->name('news');

Route::get('/contact',[contactController::class,'index'])->name('contact');
Route::post('/contact/submit',[contactController::class,'submit'])->name('contact.submit');

Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.submit');