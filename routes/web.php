<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('come',function(){
    return view('come');

})->name('come');

Route::get('hey',function(){
    return view('hey');
})->name('hey');

Route::get('play',function(){
return view('welcome');
})->name('play');

Route::post('/submit',function(Request $request){
    return response()->json($request->all()
);

});

Route::get('subi',function(){
    return view('sub');
})->name('sub');

Route::get('first',function(){
    return view('first');
})->name('first');

Route::post('/submi',function(Request $request){
    
    
    return response()->json($request->all()
);
});
