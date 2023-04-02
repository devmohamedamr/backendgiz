<?php

use App\Http\Controllers\category;
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


Route::get('/',[category::class,"index"]);
Route::get('/create',[category::class,"create"]);
Route::post("/store",[category::class,"store"]);
Route::get('/delete/{id}',[category::class,"delete"]);

Route::get('/edit/{id}',[category::class,"edit"]);
Route::post("/update",[category::class,"update"]);
