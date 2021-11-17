<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

use App\Http\Controllers\ProductController;

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
//ROUTE PRODUCT 
Route::get('/products', [ProductController::class,'index']);

//Create & Store 
Route::get('/products/create', [ProductController::class,'create']);
Route::post('/products', [ProductController::class,'store']);

//Edit & Update
Route::get('/products/{id}/edit', [ProductController::class,'edit']);
Route::put('/products/{id}', [ProductController::class,'update']);

//Delete
Route::delete('/products/{id}', [ProductController::class,'destroy']);


