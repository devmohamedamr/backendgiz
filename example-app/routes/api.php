<?php

use App\Http\Controllers\api\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::get("categories",[category::class,"index"]);
Route::get("categories/{id}",[category::class,"show"]);
Route::post("categories",[category::class,"store"]);
Route::delete("categories/{id}",[category::class,"destroy"]);
Route::put("categories/{id}",[category::class,"update"]);
