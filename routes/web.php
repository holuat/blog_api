<?php

use App\Http\Controllers\Api\v1\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;


use Illuminate\Support\Facades\Route;

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
// Trang hien thi bai viet Blog
Route::get('/',[IndexController::class,'index']);
Route::get('/post/{id}',[PostController::class,'show']);

//Auth
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
