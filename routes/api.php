<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarketController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/product', [ProductController::class, 'store']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/product/{product}', [ProductController::class, 'show']);
Route::put('/product/{product}', [ProductController::class, 'update']);
Route::delete('/product/{product}', [ProductController::class, 'destroy']);


Route::post('/market', [MarketController::class, 'store']);
Route::get('/market', [MarketController::class, 'index']);
Route::get('/market/{market}', [MarketController::class, 'show']);
Route::put('/market/{market}', [MarketController::class, 'update']);
Route::delete('/market/{market}', [MarketController::class, 'destroy']);

//atualizar preços
Route::put('/price/{market}', [MarketController::class, 'priceUpdate']);



