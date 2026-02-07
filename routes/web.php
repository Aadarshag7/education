<?php

use App\Http\Controllers\AwisController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BoraController;
use App\Http\Controllers\DactController;
use App\Http\Controllers\FastController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HectController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SecoController;
use App\Http\Controllers\SectController;
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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('post',PostController::class);
Route::resource('blog',BlogController::class);
Route::resource('game',GameController::class);
Route::resource('sect',SectController::class);

Route::controller(HectController::class)->prefix('hect')->group(function(){
    Route::get('','index')->name('hect.index');
    Route::get('create','create')->name('hect.create');
    Route::post('store','store')->name('hect.store');
    Route::get('edit/{id}','edit')->name('hect.edit');
    Route::put('edit/{id}','update')->name('hect.update');
});

Route::controller(DactController::class)->prefix('dect')->group(function(){
    Route::get('','index')->name('dect.index');
    Route::get('create','create')->name('dect.create');
    Route::post('store','store')->name('dect.store');
    Route::get('edit/{id}','edit')->name('dect.edit');
    Route::put('edit/{id}','update')->name('dect.update');
});

Route::controller(FastController::class)->prefix('fast')->group(function(){
    Route::get('','index')->name('fast.index');
    Route::get('create','create')->name('fast.create');
    Route::post('store','store')->name('fast.store');
    Route::get('edit/{id}','edit')->name('fast.edit');
    Route::put('edit/{id}','update')->name('fast.update');
    Route::delete('delete/{id}','destroy')->name('fast.delete');


});

Route::controller(SecoController::class)->prefix('seco')->group(function(){
Route::get('','index')->name('seco.index');
Route::get('create','create')->name('seco.create');
Route::post('store','store')->name('seco.store');
Route::get('edit/{id}','edit')->name('seco.edit');
Route::put('edit/{id}','update')->name('seco.update');


});

Route::controller(AwisController::class)->prefix('awis')->group(function(){
    Route::get('','index')->name('awis.index');
    Route::get('create','create')->name('awis.create');
    Route::post('store','store')->name('awis.store');
    
});

Route::controller(BoraController::class)->prefix('bora')->group(function(){
Route::get('','index')->name('bora.index');
Route::post('store','store')->name('bora.store');
Route::get('create','create')->name('bora.create');
});