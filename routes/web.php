<?php

use App\Http\Controllers\AwisController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BoraController;
use App\Http\Controllers\DactController;
use App\Http\Controllers\DotaController;
use App\Http\Controllers\FastController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HectController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\KutaController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SecoController;
use App\Http\Controllers\SectController;
use App\Http\Controllers\SotaController;
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

Route::controller(DotaController::class)->prefix('dota')->group(function(){
Route::get('','index')->name('dota.index');
Route::get('create','create')->name('dota.create');
Route::post('store','store')->name('dota.store');
Route::get('edit/{id}','edit')->name('dota.edit');
Route::put('edit/{id}','update')->name('dota.update');
Route::delete('delete/{id}','destroy')->name('dota.delete');
});

Route::controller(KotaController::class)->prefix('kota')->group(function(){
Route::get('','index')->name('kota.index');
Route::get('create','create')->name('kota.create');
Route::post('store','store')->name('kota.store');
Route::get('edit/{id}','edit')->name('kota.edit');
Route::put('update/{id}','update')->name('kota.update');

});

Route::controller(SotaController::class)->prefix('sota')->group(function(){
Route::get('','index')->name('sota.index');
Route::post('store','store')->name('sota.store');
Route::get('create','create')->name('sota.create');
Route::get('edit/{id}','edit')->name('sota.edit');
Route::put('edit/{id}','update')->name('sota.update');
});

Route::controller(KutaController::class)->prefix('kuta')->group(function(){
Route::get('','index')->name('kuta.index');
Route::get('create','create')->name('kuta.create');
Route::post('store','store')->name('kuta.store');
});