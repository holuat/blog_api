<?php

use App\Http\Controllers\Api\v1\CustomerController as v1CustomerController;
use App\Http\Controllers\Api\v2\CustomerController as v2CustomerController;

use App\Http\Controllers\Api\v1\CategoryPostController as v1CategoryPostController;
use App\Http\Controllers\Api\v1\PostController as v1PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/',function(){
    return view('welcome');
});

Route::prefix('v1')->group(function(){
    Route::resource('customer',v1CustomerController::class)->only(['index','show','store','update','destroy']);
    Route::resource('category',v1CategoryPostController::class);
    Route::resource('post',v1PostController::class);

});
Route::prefix('v2')->group(function(){
    Route::resource('customer',v2CustomerController::class)->only(['show']);

});