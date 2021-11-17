<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductApiController;
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

//ROUTE PRODUCT & Show
Route::get('/products', [ProductApiController::class,'index']);
Route::get('/products/{id}', [ProductApiController::class,'show']);

//Create & Store 
Route::get('/products/create', [ProductApiController::class,'create']);
Route::post('/products', [ProductApiController::class,'store']);

//Edit & Update
//Route::get('/products/{id}/edit', [ProductApiController::class,'edit']);
Route::put('/products/{id}', [ProductApiController::class,'update']);

//Delete
Route::delete('/products/{id}', [ProductApiController::class,'destroy']);
