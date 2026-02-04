
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinaController;
use App\Http\Controllers\DinaController;
use App\Http\Controllers\MinaController;
use App\Http\Controllers\PinaController;
use App\Http\Controllers\RinaController;
use App\Http\Controllers\SinaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('fina')->group(function(){
Route::get('',[FinaController::class, 'index']);
Route::post('store',[FinaController::class,'store']);
Route::put('update/{id}',[FinaController::class,'update']);
Route::delete('delete/{id}',[FinaController::class,'destroy']);
});

Route::prefix('dina')->group(function(){
    Route::get('',[DinaController::class,'index']);
    Route::post('store',[DinaController::class,'store']);
    Route::put('update/{id}',[DinaController::class,'update']);
    Route::delete('delete/{id}',[DinaController::class,'destroy']);
});


Route::prefix('mina')->group(function(){
    Route::get('',[MinaController::class,'index']);
    Route::post('store',[MinaController::class,'store']);
    Route::put('update/{id}',[MinaController::class,'update']);
});


Route::middleware('auth:sanctum')->prefix('pina')->group(function(){
    Route::get('',[PinaController::class,'index']);
    Route::post('store',[PinaController::class,'store']);
    Route::put('update/{id}',[PinaController::class,'update']);
    Route::delete('delete/{id}',[PinaController::class,'destroy']);
});


Route::middleware('auth:sanctum')->prefix('sina')->group(function(){
    Route::get('',[SinaController::class,'index']);
    Route::post('store',[SinaController::class,'store']);
    Route::put('update/{id}',[SinaController::class,'update']);
});

Route::middleware('auth:sanctum')->prefix('rina')->group(function(){
    Route::get('',[RinaController::class,'index']);
    Route::post('store',['RinaController::class','store']);
    Route::put('update/{id}',[RinaController::class,'update']);
});