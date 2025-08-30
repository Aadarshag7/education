<?php

use App\Http\Controllers\AuthController;
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
    return view('home');
})->name('home');

Route::get('about',function(){
    return view('about');
})->name('about');

Route::get('course',function(){
    return view('course');
})->name('course');

Route::get('event',function(){
    return view('event');
})->name('event');

Route::get('contact',function(){
    return view('contact');
})->name('contact');

Route::get('blog',function(){
    return view('blog');
})->name('blog');


Route::controller(AuthController::class)->group(function(){
Route::get('register','register')->name('register');
Route::post('register','registerSave')->name('registerSave');
Route::get('login','login')->name('login');
Route::post('login','loginAction')->name('loginAction');
});

Route::get('teacher',function(){
    return view('teacher');
})->name('teacher');


