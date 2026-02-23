
<?php

use App\Http\Controllers\CategController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FinaController;
use App\Http\Controllers\DinaController;
use App\Http\Controllers\HotaController;
use App\Http\Controllers\MinaController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\PinaController;
use App\Http\Controllers\ProducController;
use App\Http\Controllers\RinaController;
use App\Http\Controllers\RotaController;
use App\Http\Controllers\SinaController;
use App\Http\Controllers\SinController;
use App\Http\Controllers\SoraController;
use App\Http\Controllers\TincController;
use App\Http\Controllers\VinaController;
use App\Http\Controllers\winaController;
use App\Http\Controllers\YinaController;
use App\Http\Controllers\ZincController;


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
    Route::post('store',[RinaController::class,'store']);
    Route::put('update/{id}',[RinaController::class,'update']);
    Route::delete('delete/{id}',[RinaController::class,'destroy']);
});

Route::middleware('auth:sanctum')->prefix('vina')->group(function(){
    Route::get('',[VinaController::class,'index']);
    Route::post('store',[VinaController::class,'store']);
    Route::put('update/{id}',[VinaController::class,'update']);
    Route::delete('delete/{id}',[VinaController::class,'destroy']);
});

Route::middleware('auth:sanctum')->prefix('wina')->group(function(){
Route::get('',[winaController::class,'index']);
Route::post('store',[winaController::class,'store']);
Route::put('update/{id}',[winaController::class,'']);
Route::delete('delete/{id}',[winaController::class,'destroy']);
});
 
Route::middleware('auth:sanctum')->prefix('yina')->group(function(){
    Route::get('',[YinaController::class,'index']);
    Route::post('store',[YinaController::class,'store']);
    Route::put('update/{id}',[YinaController::class,'update']);
    Route::delete('delete/{id}',[YinaController::class,'destroy']);
});

Route::middleware('auth:sanctum')->prefix('zinc')->group(function(){
Route::get('',[ZincController::class,'index']);
Route::post('store',[ZincController::class,'store']);
Route::put('update/{id}',[ZincController::class,'update']);
Route::delete('delete/{id}',[ZincController::class,'destroy']);
});

Route::middleware('auth:sanctum')->prefix('tinc')->group(function(){
    Route::get('', [TincController::class,'index']);
    Route::post('store',[TincController::class,'store']);
    Route::put('update/{id}',[TincController::class,'update']);
    Route::delete('delete/{id}',[TincController::class,'destroy']);

});

Route::middleware('auth:sanctum')->prefix('sinc')->group(function(){
Route::get('',[SinController::class,'index']);
Route::post('store',[SinController::class,'store']);
Route::put('update/{id}',[SinController::class,'update']);
Route::delete('delete/{id}',[SinController::class,'destroy']);
});
 
Route::middleware('auth:sanctum')->prefix('rota')->group(function(){
Route::get('',[RotaController::class,'index']);
Route::post('store',[RotaController::class,'store']);
Route::put('update/{id}',[RotaController::class,'update']);
Route::delete('delete/{id}',[RotaController::class,'destroy']);
}); 

Route::middleware('auth:sanctum')->prefix('hota')->group(function(){
Route::get('',[HotaController::class,'index']);
Route::post('store',[HotaController::class,'store']);
Route::put('update/{id}',[HotaController::class,'update']);
Route::delete('delete/{id}',[HotaController::class,'destroy']);
});

Route::middleware('auth:sanctum')->prefix('nota')->group(function(){
Route::get('',[NotaController::class,'index']);
Route::post('store',[NotaController::class,'store']);
});

Route::prefix('sora')->group(function(){
Route::get('',[SoraController::class,'index']);
Route::post('store',[SoraController::class,'store']);
});

Route::prefix('categ')->group(function(){
Route::get('',[CategController::class,'index']);
Route::post('store',[CategController::class,'store']);
});

Route::prefix('produc')->group(function(){
Route::get('',[ProducController::class,'index']);
Route::post('store',[ProducController::class,'store']);
});