<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MarketController;
use App\Http\Controllers\UserController;


Route::group(['middleware' => 'auth:sanctum'], function(){ 
    Route::get('/product', [ProductController::class,'index']);
});

Route::post('/login', [UserController::class, 'login']);
Route::post('/user', [UserController::class, 'store']);


//product
Route::post('/product', [ProductController::class, 'store']);
Route::get('/product/{product}', [ProductController::class, 'show']);
Route::put('/product/{product}', [ProductController::class, 'update']);
Route::delete('/product/{product}', [ProductController::class, 'destroy']);

//market
Route::post('/market', [MarketController::class, 'store']);
Route::get('/market', [MarketController::class, 'index']);
Route::get('/market/{market}', [MarketController::class, 'show']);
Route::put('/market/{market}', [MarketController::class, 'update']);
Route::delete('/market/{market}', [MarketController::class, 'destroy']);

//atualizar preços
Route::put('/price/{market}', [MarketController::class, 'priceUpdate']);



