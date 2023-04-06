<?php

use App\Http\Controllers\category;
use App\Http\Controllers\course;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\user;
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
Route::get('/product',[ProductController::class,"index"]);
Route::get('/course',[course::class,"index"])->middleware("auth");
Route::get('/login',[user::class,"login"])->name("login");

Route::post('/loginrequest',[user::class,"loginrequest"]);

Route::get('/logout',[user::class,"logout"]);
